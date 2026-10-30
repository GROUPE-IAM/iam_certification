<?php
/**
 * Réglages de la barre de filtres du catalogue (Formations → Filtres).
 *
 * Quand afficher la barre, quels filtres proposer (recherche, format, type)
 * et quelles thématiques montrer d'office ; les autres restent accessibles
 * par le bouton « + Thématiques ».
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Écran et lecture des réglages de filtres.
 */
class IAM_Cert_Filtres {

	const PAGE   = 'iam-certifications-filtres';
	const OPTION = 'iam_cert_filtres';

	/**
	 * Enregistre les hooks.
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'admin_menu', array( $this, 'menu' ), 21 );
		add_action( 'admin_post_iam_cert_filtres_save', array( $this, 'save' ) );
	}

	/**
	 * Réglages enregistrés, complétés par les valeurs par défaut.
	 *
	 * @return array
	 */
	public static function reglages() {
		$defaut = array(
			'affichage' => 'auto',   // auto (dès 4 formations), toujours, jamais.
			'recherche' => 1,
			'formats'   => 1,
			'types'     => 1,
			'themes'    => array(),  // Thématiques visibles d'office ; vide = les plus fournies.
			'nb_themes' => 3,
			'page_titre' => __( 'Formez-vous aux compétences qui font la différence', 'iam-certifications' ),
			'page_intro' => __( 'Certificats professionnels en ligne et séminaires intensifs à Dakar : {n} formations conçues par le Groupe IAM pour les professionnels et les organisations.', 'iam-certifications' ),
		);

		$r = wp_parse_args( (array) get_option( self::OPTION, array() ), $defaut );

		// Un titre ou une accroche vidés reprennent le texte par défaut.
		foreach ( array( 'page_titre', 'page_intro' ) as $cle ) {
			if ( '' === trim( (string) $r[ $cle ] ) ) {
				$r[ $cle ] = $defaut[ $cle ];
			}
		}

		return $r;
	}

	/**
	 * Sous-menu sous « Formations ».
	 *
	 * @return void
	 */
	public function menu() {
		add_submenu_page(
			IAM_Cert_Admin_UI::PAGE_LIST,
			__( 'Page catalogue et filtres', 'iam-certifications' ),
			__( 'Page catalogue', 'iam-certifications' ),
			IAM_Cert_Admin_UI::CAP,
			self::PAGE,
			array( $this, 'render' )
		);
	}

	/**
	 * Écran des réglages.
	 *
	 * @return void
	 */
	public function render() {
		$r      = self::reglages();
		$themes = get_terms(
			array(
				'taxonomy'   => IAM_CERT_TAX_DOMAINE,
				'hide_empty' => true,
				'orderby'    => 'count',
				'order'      => 'DESC',
			)
		);
		$themes = is_wp_error( $themes ) ? array() : $themes;
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$message = isset( $_GET['iam_msg'] ) ? sanitize_key( $_GET['iam_msg'] ) : '';

		$affichages = array(
			'auto'     => array( 'dashicons-admin-generic', __( 'Automatique', 'iam-certifications' ), __( 'Affichée au-dessus de toute liste d’au moins 4 formations.', 'iam-certifications' ) ),
			'toujours' => array( 'dashicons-visibility', __( 'Toujours', 'iam-certifications' ), __( 'Affichée au-dessus de chaque liste, même courte.', 'iam-certifications' ) ),
			'jamais'   => array( 'dashicons-hidden', __( 'Jamais', 'iam-certifications' ), __( 'Masquée partout, sauf shortcode avec filters="true".', 'iam-certifications' ) ),
		);
		$options = array(
			'recherche' => __( 'Champ de recherche (titre, outil, public)', 'iam-certifications' ),
			'formats'   => __( 'Format : En ligne, Hybride, Présentiel', 'iam-certifications' ),
			'types'     => __( 'Type : Certificats, Séminaires', 'iam-certifications' ),
		);
		?>
		<div class="wrap iam-cert-admin">
			<header class="iam-adm-head">
				<div>
					<p class="iam-adm-eyebrow"><?php esc_html_e( 'Catalogue', 'iam-certifications' ); ?></p>
					<h1 class="iam-adm-title"><?php esc_html_e( 'Page catalogue et filtres', 'iam-certifications' ); ?></h1>
					<p class="iam-adm-intro"><?php esc_html_e( 'Réglez la barre affichée au-dessus des certificats et séminaires. Le format d’une formation se choisit dans sa fiche (étape « Format & durée »).', 'iam-certifications' ); ?></p>
				</div>
			</header>
			<hr class="wp-header-end">

			<?php if ( 'saved' === $message ) : ?>
				<div class="notice notice-success is-dismissible"><p><?php esc_html_e( 'Réglages des filtres enregistrés.', 'iam-certifications' ); ?></p></div>
			<?php endif; ?>

			<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
				<input type="hidden" name="action" value="iam_cert_filtres_save">
				<?php wp_nonce_field( 'iam_cert_filtres_save' ); ?>

				<section class="iam-sec">
					<header class="iam-sec__head">
						<span class="iam-sec__icon dashicons dashicons-filter" aria-hidden="true"></span>
						<div>
							<h2 class="iam-sec__title"><?php esc_html_e( 'Quand afficher la barre', 'iam-certifications' ); ?></h2>
							<p class="iam-sec__desc"><?php esc_html_e( 'Un shortcode avec filters="true" ou filters="false" garde la main sur sa page.', 'iam-certifications' ); ?></p>
						</div>
					</header>
					<div class="iam-sec__body">
						<div class="iam-kinds" role="radiogroup" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
							<?php foreach ( $affichages as $cle => $a ) : ?>
								<label class="iam-kind">
									<input type="radio" name="affichage" value="<?php echo esc_attr( $cle ); ?>" <?php checked( $r['affichage'], $cle ); ?>>
									<span class="iam-kind__icon dashicons <?php echo esc_attr( $a[0] ); ?>"></span>
									<span class="iam-kind__title"><?php echo esc_html( $a[1] ); ?></span>
									<span class="iam-kind__desc"><?php echo esc_html( $a[2] ); ?></span>
								</label>
							<?php endforeach; ?>
						</div>
					</div>
				</section>

				<section class="iam-sec">
					<header class="iam-sec__head">
						<span class="iam-sec__icon dashicons dashicons-screenoptions" aria-hidden="true"></span>
						<div>
							<h2 class="iam-sec__title"><?php esc_html_e( 'Filtres proposés', 'iam-certifications' ); ?></h2>
							<p class="iam-sec__desc"><?php esc_html_e( 'Les thématiques sont toujours proposées dès qu’il y en a au moins deux.', 'iam-certifications' ); ?></p>
						</div>
					</header>
					<div class="iam-sec__body">
						<?php foreach ( $options as $cle => $libelle ) : ?>
							<label class="iam-switch">
								<input type="checkbox" name="<?php echo esc_attr( $cle ); ?>" value="1" <?php checked( $r[ $cle ], 1 ); ?>>
								<span class="iam-switch__track"></span>
								<span><?php echo esc_html( $libelle ); ?></span>
							</label>
						<?php endforeach; ?>
					</div>
				</section>

				<section class="iam-sec">
					<header class="iam-sec__head">
						<span class="iam-sec__icon dashicons dashicons-tag" aria-hidden="true"></span>
						<div>
							<h2 class="iam-sec__title"><?php esc_html_e( 'Thématiques visibles d’office', 'iam-certifications' ); ?></h2>
							<p class="iam-sec__desc"><?php esc_html_e( 'Cochez celles à montrer directement dans la barre ; les autres s’ajoutent par le bouton « + Thématiques ». Sans choix, les plus fournies sont montrées.', 'iam-certifications' ); ?></p>
						</div>
					</header>
					<div class="iam-sec__body">
						<?php if ( ! $themes ) : ?>
							<p class="iam-field__hint"><?php esc_html_e( 'Aucune thématique publiée pour le moment.', 'iam-certifications' ); ?></p>
						<?php else : ?>
							<div class="iam-filtres-themes">
								<?php foreach ( $themes as $t ) : ?>
									<label class="iam-switch">
										<input type="checkbox" name="themes[]" value="<?php echo esc_attr( $t->slug ); ?>" <?php checked( in_array( $t->slug, $r['themes'], true ) ); ?>>
										<span class="iam-switch__track"></span>
										<span><?php echo esc_html( $t->name ); ?> <span class="iam-field__hint">(<?php echo (int) $t->count; ?>)</span></span>
									</label>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>

						<div class="iam-field" style="max-width: 360px; margin-top: 16px;">
							<label class="iam-field__label" for="iam_nb_themes"><?php esc_html_e( 'Sans choix : nombre de thématiques montrées', 'iam-certifications' ); ?></label>
							<input type="number" id="iam_nb_themes" name="nb_themes" min="0" max="20" value="<?php echo (int) $r['nb_themes']; ?>" class="small-text">
						</div>
					</div>
				</section>

				<section class="iam-sec">
					<header class="iam-sec__head">
						<span class="iam-sec__icon dashicons dashicons-welcome-view-site" aria-hidden="true"></span>
						<div>
							<h2 class="iam-sec__title"><?php esc_html_e( 'Page catalogue', 'iam-certifications' ); ?></h2>
							<p class="iam-sec__desc">
								<?php
								printf(
									/* translators: %s : lien vers la page catalogue */
									esc_html__( 'Toutes les formations, avec la barre de filtres : %s. Les shortcodes restent utilisables dans n’importe quelle page.', 'iam-certifications' ),
									'<a href="' . esc_url( get_post_type_archive_link( IAM_CERT_CPT ) ) . '" target="_blank" rel="noopener">' . esc_html( untrailingslashit( preg_replace( '#^https?://#', '', get_post_type_archive_link( IAM_CERT_CPT ) ) ) ) . '</a>'
								);
								?>
							</p>
						</div>
					</header>
					<div class="iam-sec__body">
						<div class="iam-field">
							<label class="iam-field__label" for="iam_page_titre"><?php esc_html_e( 'Titre', 'iam-certifications' ); ?></label>
							<input type="text" id="iam_page_titre" name="page_titre" class="widefat" value="<?php echo esc_attr( $r['page_titre'] ); ?>">
						</div>
						<div class="iam-field" style="margin-top: 12px;">
							<label class="iam-field__label" for="iam_page_intro"><?php esc_html_e( 'Accroche', 'iam-certifications' ); ?></label>
							<textarea id="iam_page_intro" name="page_intro" rows="3" class="widefat"><?php echo esc_textarea( $r['page_intro'] ); ?></textarea>
							<p class="iam-field__hint"><?php esc_html_e( '{n} est remplacé par le nombre de formations publiées.', 'iam-certifications' ); ?></p>
						</div>
					</div>
				</section>

				<p><button type="submit" class="iam-adm-btn iam-adm-btn--publish"><span class="dashicons dashicons-saved"></span> <?php esc_html_e( 'Enregistrer', 'iam-certifications' ); ?></button></p>
			</form>
		</div>
		<style>.iam-filtres-themes { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 4px 18px; }</style>
		<?php
	}

	/**
	 * Enregistre les réglages.
	 *
	 * @return void
	 */
	public function save() {
		if ( ! current_user_can( IAM_Cert_Admin_UI::CAP ) ) {
			wp_die( esc_html__( 'Accès refusé.', 'iam-certifications' ) );
		}
		check_admin_referer( 'iam_cert_filtres_save' );

		$affichage = sanitize_key( wp_unslash( $_POST['affichage'] ?? 'auto' ) );
		$themes    = array_map( 'sanitize_title', (array) wp_unslash( $_POST['themes'] ?? array() ) ); // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- nettoyé par sanitize_title.

		update_option(
			self::OPTION,
			array(
				'affichage' => in_array( $affichage, array( 'auto', 'toujours', 'jamais' ), true ) ? $affichage : 'auto',
				'recherche' => empty( $_POST['recherche'] ) ? 0 : 1,
				'formats'   => empty( $_POST['formats'] ) ? 0 : 1,
				'types'     => empty( $_POST['types'] ) ? 0 : 1,
				'themes'    => array_values( array_filter( $themes ) ),
				'nb_themes'  => min( 20, absint( $_POST['nb_themes'] ?? 3 ) ),
				'page_titre' => sanitize_text_field( wp_unslash( $_POST['page_titre'] ?? '' ) ),
				'page_intro' => sanitize_textarea_field( wp_unslash( $_POST['page_intro'] ?? '' ) ),
			),
			false
		);

		wp_safe_redirect( admin_url( 'admin.php?page=' . self::PAGE . '&iam_msg=saved' ) );
		exit;
	}
}
