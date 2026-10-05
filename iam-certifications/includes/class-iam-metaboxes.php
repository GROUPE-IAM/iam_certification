<?php
/**
 * Metabox d'édition d'une certification : infos générales, programme (modules
 * & leçons), et liaison au formulaire IAM Leads.
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Gère la metabox d'édition.
 */
class IAM_Cert_Metaboxes {

	const NONCE = 'iam_cert_meta_nonce';

	/**
	 * Enregistre les hooks.
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post_' . IAM_CERT_CPT, array( $this, 'save' ), 10, 2 );
	}

	/**
	 * Champs simples : clé meta => réglages (type + libellé + aide).
	 *
	 * @return array
	 */
	public static function fields() {
		return array(
			'_iam_hero'         => array(
				'label' => __( 'Accroche (hero)', 'iam-certifications' ),
				'type'  => 'textarea',
				'desc'  => __( 'Phrase de présentation affichée sous le titre.', 'iam-certifications' ),
			),
			'_iam_duree_heures' => array(
				'label' => __( 'Volume horaire (heures)', 'iam-certifications' ),
				'type'  => 'number',
				'desc'  => __( 'Ex. 55', 'iam-certifications' ),
			),
			'_iam_duree_texte'  => array(
				'label' => __( 'Durée (texte)', 'iam-certifications' ),
				'type'  => 'text',
				'desc'  => __( 'Ex. « 11 semaines » ou « 3 jours (format atelier) ».', 'iam-certifications' ),
			),
			'_iam_niveau'       => array(
				'label' => __( 'Niveau', 'iam-certifications' ),
				'type'  => 'text',
				'desc'  => __( 'Ex. débutant, intermédiaire, avancé.', 'iam-certifications' ),
			),
			'_iam_format'       => array(
				'label' => __( 'Format', 'iam-certifications' ),
				'type'  => 'text',
				'desc'  => __( 'Ex. « 100 % en ligne ».', 'iam-certifications' ),
			),
			'_iam_public'       => array(
				'label' => __( 'Public concerné', 'iam-certifications' ),
				'type'  => 'textarea',
				'desc'  => __( 'À qui s’adresse la formation.', 'iam-certifications' ),
			),
			'_iam_prerequis'    => array(
				'label' => __( 'Prérequis', 'iam-certifications' ),
				'type'  => 'textarea',
				'desc'  => __( 'Conditions d’accès recommandées.', 'iam-certifications' ),
			),
			'_iam_evaluation'   => array(
				'label' => __( 'Évaluation & certification', 'iam-certifications' ),
				'type'  => 'textarea',
				'desc'  => __( 'Modalités d’évaluation et de délivrance du certificat.', 'iam-certifications' ),
			),
			'_iam_cta_texte'    => array(
				'label' => __( 'Texte du bouton (CTA)', 'iam-certifications' ),
				'type'  => 'text',
				'desc'  => __( 'Par défaut : « Demander une information ».', 'iam-certifications' ),
			),
		);
	}

	/**
	 * Déclare les metaboxes.
	 *
	 * @return void
	 */
	public function add_meta_boxes() {
		add_meta_box(
			'iam_cert_infos',
			__( 'Infos générales', 'iam-certifications' ),
			array( $this, 'render_infos' ),
			IAM_CERT_CPT,
			'normal',
			'high'
		);

		add_meta_box(
			'iam_cert_programme',
			__( 'Programme (modules & leçons)', 'iam-certifications' ),
			array( $this, 'render_programme' ),
			IAM_CERT_CPT,
			'normal',
			'default'
		);

		add_meta_box(
			'iam_cert_form',
			__( 'Formulaire de candidature', 'iam-certifications' ),
			array( $this, 'render_form_box' ),
			IAM_CERT_CPT,
			'side',
			'default'
		);
	}

	/**
	 * Metabox « Infos générales ».
	 *
	 * @param WP_Post $post Post.
	 * @return void
	 */
	public function render_infos( $post ) {
		wp_nonce_field( 'iam_cert_save_meta', self::NONCE );

		echo '<div class="iam-cert-metabox">';

		foreach ( self::fields() as $key => $args ) {
			$value = get_post_meta( $post->ID, $key, true );
			$id    = esc_attr( $key );
			echo '<p class="iam-cert-row">';
			printf( '<label for="%1$s"><strong>%2$s</strong></label>', $id, esc_html( $args['label'] ) );

			if ( 'textarea' === $args['type'] ) {
				printf( '<textarea id="%1$s" name="%1$s" rows="3" class="widefat">%2$s</textarea>', $id, esc_textarea( $value ) );
			} else {
				printf(
					'<input type="%1$s" id="%2$s" name="%2$s" value="%3$s" class="widefat" />',
					esc_attr( $args['type'] ),
					$id,
					esc_attr( $value )
				);
			}

			if ( ! empty( $args['desc'] ) ) {
				printf( '<span class="description">%s</span>', esc_html( $args['desc'] ) );
			}
			echo '</p>';
		}

		$featured = get_post_meta( $post->ID, '_iam_featured', true );
		echo '<p class="iam-cert-row">';
		printf(
			'<label><input type="checkbox" name="_iam_featured" value="1" %s /> <strong>%s</strong></label>',
			checked( $featured, '1', false ),
			esc_html__( 'Mettre en avant cette certification', 'iam-certifications' )
		);
		echo '</p>';

		echo '</div>';
	}

	/**
	 * Metabox « Programme » : répéteur de modules, chaque module ayant une liste
	 * de leçons (une par ligne).
	 *
	 * @param WP_Post $post Post.
	 * @return void
	 */
	public function render_programme( $post ) {
		$modules = iam_cert_get_modules( $post->ID );

		echo '<div class="iam-modules" id="iam-modules">';
		echo '<p class="description">' . esc_html__( 'Un module = un titre + ses leçons (une leçon par ligne). Les compteurs de la fiche se calculent automatiquement.', 'iam-certifications' ) . '</p>';

		echo '<div class="iam-modules__list">';
		if ( $modules ) {
			foreach ( $modules as $i => $module ) {
				$this->render_module_row( $i, $module['titre'], $module['lecons'] );
			}
		} else {
			$this->render_module_row( 0, '', array() );
		}
		echo '</div>';

		printf(
			'<p><button type="button" class="button iam-modules__add">%s</button></p>',
			esc_html__( '+ Ajouter un module', 'iam-certifications' )
		);

		// Gabarit pour les nouveaux modules (utilisé par le JS).
		echo '<script type="text/html" id="iam-module-template">';
		$this->render_module_row( '__index__', '', array() );
		echo '</script>';

		echo '</div>';
	}

	/**
	 * Rend une ligne de module.
	 *
	 * @param int|string $index  Index du module.
	 * @param string     $titre  Titre.
	 * @param array      $lecons Leçons.
	 * @return void
	 */
	private function render_module_row( $index, $titre, $lecons ) {
		$lecons_txt = is_array( $lecons ) ? implode( "\n", $lecons ) : '';
		?>
		<div class="iam-module">
			<div class="iam-module__head">
				<span class="iam-module__drag" title="<?php esc_attr_e( 'Glisser pour réordonner', 'iam-certifications' ); ?>">⋮⋮</span>
				<input type="text" class="iam-module__titre widefat"
					name="iam_modules[<?php echo esc_attr( $index ); ?>][titre]"
					value="<?php echo esc_attr( $titre ); ?>"
					placeholder="<?php esc_attr_e( 'Titre du module (ex. « Module 1 — Fondamentaux »)', 'iam-certifications' ); ?>" />
				<button type="button" class="button-link iam-module__remove" title="<?php esc_attr_e( 'Supprimer', 'iam-certifications' ); ?>">&times;</button>
			</div>
			<textarea class="iam-module__lecons widefat" rows="3"
				name="iam_modules[<?php echo esc_attr( $index ); ?>][lecons]"
				placeholder="<?php esc_attr_e( 'Une leçon par ligne', 'iam-certifications' ); ?>"><?php echo esc_textarea( $lecons_txt ); ?></textarea>
		</div>
		<?php
	}

	/**
	 * Metabox latérale : sélecteur du formulaire IAM Leads.
	 *
	 * @param WP_Post $post Post.
	 * @return void
	 */
	public function render_form_box( $post ) {
		$current = get_post_meta( $post->ID, '_iam_form_id', true );

		if ( ! class_exists( 'IAM_Leads_Form_Builder' ) ) {
			echo '<p class="description">';
			esc_html_e( 'IAM Leads inactif : le formulaire « certifications » par défaut sera utilisé une fois le plugin activé.', 'iam-certifications' );
			echo '</p>';
			printf( '<input type="hidden" name="_iam_form_id" value="%s" />', esc_attr( $current ) );
			return;
		}

		$forms = IAM_Leads_Form_Builder::all();
		echo '<select id="_iam_form_id" name="_iam_form_id" class="widefat">';
		printf( '<option value="">%s</option>', esc_html__( '— Formulaire par défaut —', 'iam-certifications' ) );
		foreach ( $forms as $form ) {
			printf(
				'<option value="%1$d" %2$s>%3$s</option>',
				(int) $form->id,
				selected( (string) $current, (string) $form->id, false ),
				esc_html( $form->nom )
			);
		}
		echo '</select>';
		echo '<p class="description">' . esc_html__( 'Formulaire embarqué sur la page de détail.', 'iam-certifications' ) . '</p>';
	}

	/**
	 * Enregistre les métadonnées.
	 *
	 * @param int     $post_id ID.
	 * @param WP_Post $post    Post.
	 * @return void
	 */
	public function save( $post_id, $post ) {
		if ( ! isset( $_POST[ self::NONCE ] ) || ! wp_verify_nonce( sanitize_key( $_POST[ self::NONCE ] ), 'iam_cert_save_meta' ) ) {
			return;
		}
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		// Champs simples.
		foreach ( self::fields() as $key => $args ) {
			if ( ! isset( $_POST[ $key ] ) ) {
				continue;
			}
			$raw = wp_unslash( $_POST[ $key ] );
			if ( 'textarea' === $args['type'] ) {
				$value = sanitize_textarea_field( $raw );
			} elseif ( 'number' === $args['type'] ) {
				$value = '' === $raw ? '' : (string) absint( $raw );
			} else {
				$value = sanitize_text_field( $raw );
			}
			update_post_meta( $post_id, $key, $value );
		}

		update_post_meta( $post_id, '_iam_featured', isset( $_POST['_iam_featured'] ) ? '1' : '' );

		// Modules.
		$modules = array();
		if ( isset( $_POST['iam_modules'] ) && is_array( $_POST['iam_modules'] ) ) {
			foreach ( wp_unslash( $_POST['iam_modules'] ) as $raw ) {
				$titre  = isset( $raw['titre'] ) ? sanitize_text_field( $raw['titre'] ) : '';
				$brut   = isset( $raw['lecons'] ) ? (string) $raw['lecons'] : '';
				$lecons = array_filter( array_map( 'trim', preg_split( '/\r\n|\r|\n/', $brut ) ) );
				$lecons = array_values( array_map( 'sanitize_text_field', $lecons ) );

				if ( '' === $titre && ! $lecons ) {
					continue;
				}
				$modules[] = array(
					'titre'  => $titre,
					'lecons' => $lecons,
				);
			}
		}
		update_post_meta( $post_id, '_iam_modules', $modules );

		// Formulaire associé.
		$form_id = isset( $_POST['_iam_form_id'] ) ? absint( wp_unslash( $_POST['_iam_form_id'] ) ) : 0;
		update_post_meta( $post_id, '_iam_form_id', $form_id ? (string) $form_id : '' );
	}
}
