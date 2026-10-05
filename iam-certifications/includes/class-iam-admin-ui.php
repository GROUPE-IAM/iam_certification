<?php
/**
 * Interface d'administration dédiée (intégrée au plugin) : liste et formulaire
 * de création / édition d'une certification, sans passer par l'éditeur WordPress.
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Menu + écrans d'admin maison.
 */
class IAM_Cert_Admin_UI {

	const PAGE_LIST = 'iam-certifications';
	const PAGE_EDIT = 'iam-certifications-edit';
	const CAP       = 'edit_posts';

	/**
	 * Enregistre les hooks.
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'admin_menu', array( $this, 'menu' ) );
		add_action( 'admin_post_iam_cert_save', array( $this, 'handle_save' ) );
		add_action( 'admin_post_iam_cert_delete', array( $this, 'handle_delete' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'assets' ) );
	}

	/**
	 * Construit le menu du plugin.
	 *
	 * @return void
	 */
	public function menu() {
		add_menu_page(
			__( 'Certifications', 'iam-certifications' ),
			__( 'Certifications', 'iam-certifications' ),
			self::CAP,
			self::PAGE_LIST,
			array( $this, 'render_list' ),
			'dashicons-awards',
			25
		);

		add_submenu_page(
			self::PAGE_LIST,
			__( 'Toutes les certifications', 'iam-certifications' ),
			__( 'Toutes les certifications', 'iam-certifications' ),
			self::CAP,
			self::PAGE_LIST,
			array( $this, 'render_list' )
		);

		add_submenu_page(
			self::PAGE_LIST,
			__( 'Ajouter', 'iam-certifications' ),
			__( 'Ajouter', 'iam-certifications' ),
			self::CAP,
			self::PAGE_EDIT,
			array( $this, 'render_edit' )
		);

		// Accès aux taxonomies dans le même menu.
		add_submenu_page(
			self::PAGE_LIST,
			__( 'Domaines', 'iam-certifications' ),
			__( 'Domaines', 'iam-certifications' ),
			self::CAP,
			'edit-tags.php?taxonomy=' . IAM_CERT_TAX_DOMAINE . '&post_type=' . IAM_CERT_CPT
		);

		add_submenu_page(
			self::PAGE_LIST,
			__( 'Outils', 'iam-certifications' ),
			__( 'Outils', 'iam-certifications' ),
			self::CAP,
			'edit-tags.php?taxonomy=' . IAM_CERT_TAX_OUTIL . '&post_type=' . IAM_CERT_CPT
		);
	}

	/**
	 * Charge les assets (media + répéteur) sur nos écrans uniquement.
	 *
	 * @param string $hook Hook de la page courante.
	 * @return void
	 */
	public function assets( $hook ) {
		if ( false === strpos( $hook, self::PAGE_LIST ) && false === strpos( $hook, self::PAGE_EDIT ) ) {
			return;
		}
		wp_enqueue_media();
		wp_enqueue_style( 'iam-cert-admin', IAM_CERT_URL . 'assets/css/iam-admin.css', array(), IAM_CERT_VERSION );
		wp_enqueue_script( 'iam-gsap', IAM_CERT_URL . 'assets/lib/gsap.min.js', array(), '3.12.5', true );
		wp_enqueue_script( 'iam-cert-admin', IAM_CERT_URL . 'assets/js/iam-admin.js', array( 'jquery', 'iam-gsap' ), IAM_CERT_VERSION, true );
	}

	/* =====================================================================
	 * Liste
	 * ================================================================== */

	/**
	 * Affiche la liste des certifications.
	 *
	 * @return void
	 */
	public function render_list() {
		if ( ! current_user_can( self::CAP ) ) {
			return;
		}

		$this->notice();

		$certifs = get_posts(
			array(
				'post_type'      => IAM_CERT_CPT,
				'post_status'    => array( 'publish', 'draft', 'pending' ),
				'numberposts'    => -1,
				'orderby'        => 'menu_order title',
				'order'          => 'ASC',
			)
		);

		$add_url = admin_url( 'admin.php?page=' . self::PAGE_EDIT );
		?>
		<div class="wrap iam-cert-admin">
			<h1 class="wp-heading-inline"><?php esc_html_e( 'Certifications', 'iam-certifications' ); ?></h1>
			<a href="<?php echo esc_url( $add_url ); ?>" class="page-title-action"><?php esc_html_e( 'Ajouter', 'iam-certifications' ); ?></a>
			<hr class="wp-header-end">

			<table class="wp-list-table widefat fixed striped">
				<thead>
					<tr>
						<th><?php esc_html_e( 'Titre', 'iam-certifications' ); ?></th>
						<th><?php esc_html_e( 'Domaine', 'iam-certifications' ); ?></th>
						<th><?php esc_html_e( 'Durée', 'iam-certifications' ); ?></th>
						<th><?php esc_html_e( 'Modules', 'iam-certifications' ); ?></th>
						<th><?php esc_html_e( 'En avant', 'iam-certifications' ); ?></th>
						<th><?php esc_html_e( 'Statut', 'iam-certifications' ); ?></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if ( ! $certifs ) : ?>
						<tr><td colspan="7"><?php esc_html_e( 'Aucune certification pour le moment.', 'iam-certifications' ); ?></td></tr>
					<?php endif; ?>
					<?php foreach ( $certifs as $c ) : ?>
						<?php
						$edit_url = admin_url( 'admin.php?page=' . self::PAGE_EDIT . '&id=' . $c->ID );
						$del_url  = wp_nonce_url(
							admin_url( 'admin-post.php?action=iam_cert_delete&id=' . $c->ID ),
							'iam_cert_delete_' . $c->ID
						);
						$domaines = get_the_terms( $c->ID, IAM_CERT_TAX_DOMAINE );
						$domaine  = ( $domaines && ! is_wp_error( $domaines ) ) ? $domaines[0]->name : '—';
						$counts   = iam_cert_counts( $c->ID );
						$featured = get_post_meta( $c->ID, '_iam_featured', true );
						?>
						<tr>
							<td><strong><a href="<?php echo esc_url( $edit_url ); ?>"><?php echo esc_html( get_the_title( $c ) ); ?></a></strong></td>
							<td><?php echo esc_html( $domaine ); ?></td>
							<td><?php echo esc_html( iam_cert_duree_label( $c->ID ) ?: '—' ); ?></td>
							<td><?php echo esc_html( $counts['modules'] ); ?></td>
							<td><?php echo $featured ? '★' : '—'; ?></td>
							<td><?php echo esc_html( get_post_status( $c ) ); ?></td>
							<td>
								<a href="<?php echo esc_url( $edit_url ); ?>"><?php esc_html_e( 'Modifier', 'iam-certifications' ); ?></a> |
								<a href="<?php echo esc_url( get_permalink( $c ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Voir', 'iam-certifications' ); ?></a> |
								<a href="<?php echo esc_url( $del_url ); ?>" class="iam-cert-del" style="color:#b32d2e;"><?php esc_html_e( 'Supprimer', 'iam-certifications' ); ?></a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<?php
	}

	/* =====================================================================
	 * Formulaire d'édition
	 * ================================================================== */

	/**
	 * Affiche le formulaire de création / édition.
	 *
	 * @return void
	 */
	public function render_edit() {
		if ( ! current_user_can( self::CAP ) ) {
			return;
		}

		$id   = isset( $_GET['id'] ) ? absint( $_GET['id'] ) : 0; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$post = $id ? get_post( $id ) : null;

		if ( $id && ( ! $post || IAM_CERT_CPT !== $post->post_type ) ) {
			echo '<div class="wrap"><p>' . esc_html__( 'Certification introuvable.', 'iam-certifications' ) . '</p></div>';
			return;
		}

		// Valeurs courantes.
		$titre      = $post ? $post->post_title : '';
		$meta       = function ( $k ) use ( $id ) {
			return $id ? get_post_meta( $id, $k, true ) : '';
		};
		$domaine_id = 0;
		if ( $id ) {
			$terms = get_the_terms( $id, IAM_CERT_TAX_DOMAINE );
			if ( $terms && ! is_wp_error( $terms ) ) {
				$domaine_id = $terms[0]->term_id;
			}
		}
		$outils_csv = '';
		if ( $id ) {
			$terms = get_the_terms( $id, IAM_CERT_TAX_OUTIL );
			if ( $terms && ! is_wp_error( $terms ) ) {
				$outils_csv = implode( ', ', wp_list_pluck( $terms, 'name' ) );
			}
		}
		$thumb_id  = $id ? (int) get_post_thumbnail_id( $id ) : 0;
		$thumb_url = $thumb_id ? wp_get_attachment_image_url( $thumb_id, 'medium' ) : '';
		$modules   = $id ? iam_cert_get_modules( $id ) : array();
		$this->notice();
		?>
		<div class="wrap iam-cert-admin">
			<h1><?php echo $id ? esc_html__( 'Modifier la certification', 'iam-certifications' ) : esc_html__( 'Ajouter une certification', 'iam-certifications' ); ?></h1>

			<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="iam-cert-form-admin">
				<input type="hidden" name="action" value="iam_cert_save">
				<input type="hidden" name="id" value="<?php echo esc_attr( $id ); ?>">
				<?php wp_nonce_field( 'iam_cert_save', 'iam_cert_nonce' ); ?>

				<?php
				$statut   = $post ? $post->post_status : 'publish';
				$fields   = IAM_Cert_Metaboxes::fields();
				$step_of  = array(
					'_iam_hero'         => 1,
					'_iam_duree_heures' => 1,
					'_iam_duree_texte'  => 1,
					'_iam_niveau'       => 1,
					'_iam_format'       => 1,
					'_iam_public'       => 2,
					'_iam_prerequis'    => 2,
					'_iam_evaluation'   => 2,
					'_iam_cta_texte'    => 2,
				);
				$labels   = array(
					__( 'Infos générales', 'iam-certifications' ),
					__( 'Contenu & public', 'iam-certifications' ),
					__( 'Programme', 'iam-certifications' ),
					__( 'Classement & publication', 'iam-certifications' ),
				);
				$render_row = function ( $key, $args ) use ( $meta ) {
					$value = $meta( $key );
					echo '<p class="iam-cert-row">';
					printf( '<label for="%1$s"><strong>%2$s</strong></label>', esc_attr( $key ), esc_html( $args['label'] ) );
					if ( 'textarea' === $args['type'] ) {
						printf( '<textarea id="%1$s" name="%1$s" rows="3" class="widefat">%2$s</textarea>', esc_attr( $key ), esc_textarea( $value ) );
					} else {
						printf( '<input type="%1$s" id="%2$s" name="%2$s" class="widefat" value="%3$s">', esc_attr( $args['type'] ), esc_attr( $key ), esc_attr( $value ) );
					}
					if ( ! empty( $args['desc'] ) ) {
						printf( '<span class="description">%s</span>', esc_html( $args['desc'] ) );
					}
					echo '</p>';
				};
				?>
				<div class="iam-cert-wizard" id="iam-cert-wizard">
					<ol class="iam-wiz-nav">
						<?php foreach ( $labels as $si => $lbl ) : ?>
							<li>
								<button type="button" class="iam-wiz-tab<?php echo 0 === $si ? ' is-active' : ''; ?>" data-step="<?php echo (int) $si; ?>">
									<span class="iam-wiz-num"><?php echo (int) $si + 1; ?></span>
									<span class="iam-wiz-lbl"><?php echo esc_html( $lbl ); ?></span>
								</button>
							</li>
						<?php endforeach; ?>
					</ol>
					<div class="iam-wiz-progress"><span></span></div>

					<!-- Étape 1 : Infos générales -->
					<section class="iam-step is-active" data-step="0">
						<p class="iam-cert-row">
							<label for="iam_titre"><strong><?php esc_html_e( 'Titre', 'iam-certifications' ); ?></strong></label>
							<input type="text" id="iam_titre" name="titre" class="widefat" required value="<?php echo esc_attr( $titre ); ?>">
						</p>
						<?php foreach ( $fields as $key => $args ) : ?>
							<?php if ( 1 === ( $step_of[ $key ] ?? 0 ) ) { $render_row( $key, $args ); } ?>
						<?php endforeach; ?>
					</section>

					<!-- Étape 2 : Contenu & public -->
					<section class="iam-step" data-step="1">
						<?php foreach ( $fields as $key => $args ) : ?>
							<?php if ( 2 === ( $step_of[ $key ] ?? 0 ) ) { $render_row( $key, $args ); } ?>
						<?php endforeach; ?>
					</section>

					<!-- Étape 3 : Programme -->
					<section class="iam-step" data-step="2">
						<div class="iam-modules" id="iam-modules">
							<p class="description"><?php esc_html_e( 'Un module = un titre + ses leçons (une par ligne).', 'iam-certifications' ); ?></p>
							<div class="iam-modules__list">
								<?php
								if ( $modules ) {
									foreach ( $modules as $i => $m ) {
										echo iam_cert_module_row_html( $i, $m['titre'], $m['lecons'] ); // phpcs:ignore
									}
								} else {
									echo iam_cert_module_row_html( 0, '', array() ); // phpcs:ignore
								}
								?>
							</div>
							<p><button type="button" class="button iam-modules__add"><?php esc_html_e( '+ Ajouter un module', 'iam-certifications' ); ?></button></p>
							<script type="text/html" id="iam-module-template"><?php echo iam_cert_module_row_html( '__index__', '', array() ); // phpcs:ignore ?></script>
						</div>
					</section>

					<!-- Étape 4 : Classement & publication -->
					<section class="iam-step" data-step="3">
						<div class="iam-cert-cols">
							<div class="iam-cert-box">
								<h3><?php esc_html_e( 'Domaine', 'iam-certifications' ); ?></h3>
								<?php
								wp_dropdown_categories(
									array(
										'taxonomy'          => IAM_CERT_TAX_DOMAINE,
										'name'              => 'domaine_id',
										'selected'          => $domaine_id,
										'show_option_none'  => __( '— Choisir —', 'iam-certifications' ),
										'option_none_value' => 0,
										'hierarchical'      => true,
										'hide_empty'        => false,
										'class'             => 'widefat',
									)
								);
								?>
								<p>
									<label for="domaine_new"><?php esc_html_e( '…ou nouveau domaine', 'iam-certifications' ); ?></label>
									<input type="text" id="domaine_new" name="domaine_new" class="widefat" placeholder="<?php esc_attr_e( 'Nom du domaine', 'iam-certifications' ); ?>">
								</p>
							</div>

							<div class="iam-cert-box">
								<h3><?php esc_html_e( 'Outils', 'iam-certifications' ); ?></h3>
								<textarea name="outils_csv" rows="3" class="widefat" placeholder="<?php esc_attr_e( 'Séparés par des virgules', 'iam-certifications' ); ?>"><?php echo esc_textarea( $outils_csv ); ?></textarea>
							</div>

							<div class="iam-cert-box">
								<h3><?php esc_html_e( 'Image', 'iam-certifications' ); ?></h3>
								<input type="hidden" id="iam_thumb_id" name="_thumbnail_id" value="<?php echo esc_attr( $thumb_id ); ?>">
								<div id="iam_thumb_preview" class="iam-thumb-preview">
									<?php if ( $thumb_url ) : ?><img src="<?php echo esc_url( $thumb_url ); ?>" alt=""><?php endif; ?>
								</div>
								<p>
									<button type="button" class="button" id="iam_thumb_btn"><?php esc_html_e( 'Choisir une image', 'iam-certifications' ); ?></button>
									<button type="button" class="button-link" id="iam_thumb_remove" style="color:#b32d2e;"><?php esc_html_e( 'Retirer', 'iam-certifications' ); ?></button>
								</p>
							</div>

							<?php $this->render_form_select( $id ); ?>

							<div class="iam-cert-box">
								<h3><?php esc_html_e( 'Publication', 'iam-certifications' ); ?></h3>
								<p>
									<label for="iam_statut"><?php esc_html_e( 'Statut', 'iam-certifications' ); ?></label>
									<select id="iam_statut" name="statut" class="widefat">
										<option value="publish" <?php selected( $statut, 'publish' ); ?>><?php esc_html_e( 'Publié', 'iam-certifications' ); ?></option>
										<option value="draft" <?php selected( $statut, 'draft' ); ?>><?php esc_html_e( 'Brouillon', 'iam-certifications' ); ?></option>
									</select>
								</p>
								<p>
									<label><input type="checkbox" name="_iam_featured" value="1" <?php checked( $meta( '_iam_featured' ), '1' ); ?>> <?php esc_html_e( 'Mettre en avant', 'iam-certifications' ); ?></label>
								</p>
							</div>
						</div>
					</section>

					<div class="iam-wiz-foot">
						<button type="button" class="button iam-wiz-prev"><?php esc_html_e( '← Précédent', 'iam-certifications' ); ?></button>
						<span class="iam-wiz-status" data-total="4"></span>
						<button type="button" class="button iam-wiz-next"><?php esc_html_e( 'Suivant →', 'iam-certifications' ); ?></button>
						<button type="submit" class="button button-primary button-large iam-wiz-save"><?php echo $id ? esc_html__( 'Mettre à jour', 'iam-certifications' ) : esc_html__( 'Créer la certification', 'iam-certifications' ); ?></button>
					</div>
				</div>
			</form>
		</div>
		<?php
	}

	/**
	 * Encadré « formulaire IAM Leads associé ».
	 *
	 * @param int $id ID.
	 * @return void
	 */
	private function render_form_select( $id ) {
		$current = $id ? get_post_meta( $id, '_iam_form_id', true ) : '';
		echo '<div class="iam-cert-box"><h3>' . esc_html__( 'Formulaire de candidature', 'iam-certifications' ) . '</h3>';
		if ( ! class_exists( 'IAM_Leads_Form_Builder' ) ) {
			echo '<p class="description">' . esc_html__( 'IAM Leads inactif : formulaire par défaut utilisé.', 'iam-certifications' ) . '</p>';
			printf( '<input type="hidden" name="_iam_form_id" value="%s">', esc_attr( $current ) );
			echo '</div>';
			return;
		}
		echo '<select name="_iam_form_id" class="widefat">';
		printf( '<option value="">%s</option>', esc_html__( '— Formulaire par défaut —', 'iam-certifications' ) );
		foreach ( IAM_Leads_Form_Builder::all() as $form ) {
			printf( '<option value="%1$d" %2$s>%3$s</option>', (int) $form->id, selected( (string) $current, (string) $form->id, false ), esc_html( $form->nom ) );
		}
		echo '</select></div>';
	}

	/* =====================================================================
	 * Traitement
	 * ================================================================== */

	/**
	 * Enregistre la certification (création ou mise à jour).
	 *
	 * @return void
	 */
	public function handle_save() {
		if ( ! current_user_can( self::CAP ) || ! isset( $_POST['iam_cert_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['iam_cert_nonce'] ), 'iam_cert_save' ) ) {
			wp_die( esc_html__( 'Action non autorisée.', 'iam-certifications' ) );
		}

		$id     = isset( $_POST['id'] ) ? absint( $_POST['id'] ) : 0;
		$titre  = isset( $_POST['titre'] ) ? sanitize_text_field( wp_unslash( $_POST['titre'] ) ) : '';
		$statut = ( isset( $_POST['statut'] ) && 'draft' === $_POST['statut'] ) ? 'draft' : 'publish';

		if ( '' === $titre ) {
			$this->redirect_edit( $id, 'error' );
		}

		$postarr = array(
			'post_type'   => IAM_CERT_CPT,
			'post_title'  => $titre,
			'post_status' => $statut,
		);

		if ( $id ) {
			$postarr['ID'] = $id;
			wp_update_post( $postarr );
		} else {
			$postarr['post_excerpt'] = isset( $_POST['_iam_hero'] ) ? sanitize_textarea_field( wp_unslash( $_POST['_iam_hero'] ) ) : '';
			$id                      = wp_insert_post( $postarr );
		}

		if ( ! $id || is_wp_error( $id ) ) {
			$this->redirect_edit( 0, 'error' );
		}

		// Champs simples.
		foreach ( IAM_Cert_Metaboxes::fields() as $key => $args ) {
			$raw = isset( $_POST[ $key ] ) ? wp_unslash( $_POST[ $key ] ) : '';
			if ( 'textarea' === $args['type'] ) {
				$value = sanitize_textarea_field( $raw );
			} elseif ( 'number' === $args['type'] ) {
				$value = '' === $raw ? '' : (string) absint( $raw );
			} else {
				$value = sanitize_text_field( $raw );
			}
			update_post_meta( $id, $key, $value );
		}

		update_post_meta( $id, '_iam_featured', isset( $_POST['_iam_featured'] ) ? '1' : '' );

		// Hero -> aussi dans l'extrait (utilisé par les cartes).
		if ( isset( $_POST['_iam_hero'] ) ) {
			wp_update_post(
				array(
					'ID'           => $id,
					'post_excerpt' => sanitize_textarea_field( wp_unslash( $_POST['_iam_hero'] ) ),
				)
			);
		}

		// Modules.
		$modules = array();
		if ( isset( $_POST['iam_modules'] ) && is_array( $_POST['iam_modules'] ) ) {
			foreach ( wp_unslash( $_POST['iam_modules'] ) as $raw ) {
				$m_titre = isset( $raw['titre'] ) ? sanitize_text_field( $raw['titre'] ) : '';
				$brut    = isset( $raw['lecons'] ) ? (string) $raw['lecons'] : '';
				$lecons  = array_values( array_filter( array_map( 'sanitize_text_field', array_map( 'trim', preg_split( '/\r\n|\r|\n/', $brut ) ) ) ) );
				if ( '' === $m_titre && ! $lecons ) {
					continue;
				}
				$modules[] = array(
					'titre'  => $m_titre,
					'lecons' => $lecons,
				);
			}
		}
		update_post_meta( $id, '_iam_modules', $modules );

		// Formulaire associé.
		$form_id = isset( $_POST['_iam_form_id'] ) ? absint( wp_unslash( $_POST['_iam_form_id'] ) ) : 0;
		update_post_meta( $id, '_iam_form_id', $form_id ? (string) $form_id : '' );

		// Domaine (sélection ou création).
		$domaine_terms = array();
		$domaine_new   = isset( $_POST['domaine_new'] ) ? sanitize_text_field( wp_unslash( $_POST['domaine_new'] ) ) : '';
		if ( '' !== $domaine_new ) {
			$t = term_exists( $domaine_new, IAM_CERT_TAX_DOMAINE );
			if ( ! $t ) {
				$t = wp_insert_term( $domaine_new, IAM_CERT_TAX_DOMAINE );
			}
			if ( ! is_wp_error( $t ) ) {
				$domaine_terms[] = (int) $t['term_id'];
			}
		} elseif ( ! empty( $_POST['domaine_id'] ) ) {
			$domaine_terms[] = absint( $_POST['domaine_id'] );
		}
		wp_set_object_terms( $id, $domaine_terms, IAM_CERT_TAX_DOMAINE, false );

		// Outils (CSV).
		$outils_csv = isset( $_POST['outils_csv'] ) ? sanitize_textarea_field( wp_unslash( $_POST['outils_csv'] ) ) : '';
		$outils     = array_values( array_filter( array_map( 'trim', explode( ',', $outils_csv ) ) ) );
		wp_set_object_terms( $id, $outils, IAM_CERT_TAX_OUTIL, false );

		// Image mise en avant.
		$thumb_id = isset( $_POST['_thumbnail_id'] ) ? absint( $_POST['_thumbnail_id'] ) : 0;
		if ( $thumb_id ) {
			set_post_thumbnail( $id, $thumb_id );
		} else {
			delete_post_thumbnail( $id );
		}

		$this->redirect_edit( $id, 'saved' );
	}

	/**
	 * Supprime (met à la corbeille) une certification.
	 *
	 * @return void
	 */
	public function handle_delete() {
		$id = isset( $_GET['id'] ) ? absint( $_GET['id'] ) : 0;
		if ( ! $id || ! current_user_can( 'delete_post', $id ) || ! isset( $_GET['_wpnonce'] ) || ! wp_verify_nonce( sanitize_key( $_GET['_wpnonce'] ), 'iam_cert_delete_' . $id ) ) {
			wp_die( esc_html__( 'Action non autorisée.', 'iam-certifications' ) );
		}
		wp_trash_post( $id );
		wp_safe_redirect( admin_url( 'admin.php?page=' . self::PAGE_LIST . '&iam_notice=deleted' ) );
		exit;
	}

	/**
	 * Redirige vers le formulaire d'édition avec un code de notice.
	 *
	 * @param int    $id   ID.
	 * @param string $code Code de notice.
	 * @return void
	 */
	private function redirect_edit( $id, $code ) {
		$url = $id
			? admin_url( 'admin.php?page=' . self::PAGE_EDIT . '&id=' . $id . '&iam_notice=' . $code )
			: admin_url( 'admin.php?page=' . self::PAGE_EDIT . '&iam_notice=' . $code );
		wp_safe_redirect( $url );
		exit;
	}

	/**
	 * Affiche les notices.
	 *
	 * @return void
	 */
	private function notice() {
		$code = isset( $_GET['iam_notice'] ) ? sanitize_key( $_GET['iam_notice'] ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		if ( ! $code ) {
			return;
		}
		$map = array(
			'saved'   => array( 'updated', __( 'Certification enregistrée.', 'iam-certifications' ) ),
			'deleted' => array( 'updated', __( 'Certification supprimée.', 'iam-certifications' ) ),
			'error'   => array( 'error', __( 'Le titre est obligatoire.', 'iam-certifications' ) ),
		);
		if ( isset( $map[ $code ] ) ) {
			printf( '<div class="notice notice-%1$s is-dismissible"><p>%2$s</p></div>', esc_attr( $map[ $code ][0] ), esc_html( $map[ $code ][1] ) );
		}
	}
}
