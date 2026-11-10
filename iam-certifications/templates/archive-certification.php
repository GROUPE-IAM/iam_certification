<?php
/**
 * Template : page catalogue (/certifications/ et pages de domaine).
 *
 * En-tête avec chiffres clés, accès rapides par type, barre de filtres et
 * grille de toutes les formations (le shortcode [iam_certifications]),
 * puis un bandeau de contact. Titre et accroche : Formations → Filtres.
 *
 * Surchargeable : copier ce fichier dans « votre-theme/iam-certifications/archive-certification.php ».
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$reglages = IAM_Cert_Filtres::reglages();
$terme    = is_tax( IAM_CERT_TAX_DOMAINE ) ? get_queried_object() : null;

// Chiffres clés, comptés sur les formations publiées.
$ids         = get_posts(
	array(
		'post_type'   => IAM_CERT_CPT,
		'post_status' => 'publish',
		'numberposts' => -1,
		'fields'      => 'ids',
		'tax_query'   => $terme ? array( array( 'taxonomy' => IAM_CERT_TAX_DOMAINE, 'terms' => $terme->term_id ) ) : array(), // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query
	)
);
$par_type    = array(
	'certificat' => 0,
	'seminaire'  => 0,
);
$thematiques = array();
foreach ( $ids as $id ) {
	++$par_type[ iam_cert_type( $id ) ];
	foreach ( (array) wp_get_object_terms( $id, IAM_CERT_TAX_DOMAINE, array( 'fields' => 'ids' ) ) as $t ) {
		$thematiques[ $t ] = true;
	}
}
$total = count( $ids );

$titre = $terme ? $terme->name : $reglages['page_titre'];
$intro = $terme && $terme->description ? $terme->description : str_replace( '{n}', (string) $total, $reglages['page_intro'] );

$cartes  = array(
	'certificat' => array(
		'icone' => 'award',
		'titre' => __( 'Certificats professionnels', 'iam-certifications' ),
		'texte' => __( 'Parcours de plusieurs semaines, en ligne et accompagnés, avec projet final et certificat.', 'iam-certifications' ),
	),
	'seminaire'  => array(
		'icone' => 'users',
		'titre' => __( 'Séminaires intensifs', 'iam-certifications' ),
		'texte' => __( '2 à 3 jours de pratique en présentiel à Dakar ou dans vos locaux, en petits groupes.', 'iam-certifications' ),
	),
);
$contact = iam_cert_contact();

get_header();
?>
<main id="iam-catalogue" class="iam-cert iam-cat">

	<section class="iam-cat-hero">
		<span class="iam-cat-hero__halo" aria-hidden="true"></span>
		<div class="iam-cat-wrap">
			<p class="iam-cat-hero__sur"><?php echo esc_html( $terme ? __( 'Thématique', 'iam-certifications' ) : __( 'Catalogue Groupe IAM', 'iam-certifications' ) ); ?></p>
			<h1 class="iam-cat-hero__titre"><?php echo esc_html( $titre ); ?></h1>
			<?php if ( $intro ) : ?>
				<p class="iam-cat-hero__intro"><?php echo esc_html( $intro ); ?></p>
			<?php endif; ?>

			<ul class="iam-cat-kpis">
				<li><strong data-iam-cat-count="<?php echo (int) $total; ?>"><?php echo (int) $total; ?></strong> <span><?php esc_html_e( 'formations', 'iam-certifications' ); ?></span></li>
				<?php if ( $par_type['certificat'] ) : ?>
					<li><strong data-iam-cat-count="<?php echo (int) $par_type['certificat']; ?>"><?php echo (int) $par_type['certificat']; ?></strong> <span><?php esc_html_e( 'certificats', 'iam-certifications' ); ?></span></li>
				<?php endif; ?>
				<?php if ( $par_type['seminaire'] ) : ?>
					<li><strong data-iam-cat-count="<?php echo (int) $par_type['seminaire']; ?>"><?php echo (int) $par_type['seminaire']; ?></strong> <span><?php esc_html_e( 'séminaires', 'iam-certifications' ); ?></span></li>
				<?php endif; ?>
				<?php if ( ! $terme && count( $thematiques ) > 1 ) : ?>
					<li><strong data-iam-cat-count="<?php echo (int) count( $thematiques ); ?>"><?php echo (int) count( $thematiques ); ?></strong> <span><?php esc_html_e( 'thématiques', 'iam-certifications' ); ?></span></li>
				<?php endif; ?>
			</ul>
		</div>
	</section>

	<?php if ( $par_type['certificat'] && $par_type['seminaire'] ) : ?>
		<section class="iam-cat-wrap iam-cat-types" aria-label="<?php esc_attr_e( 'Accès rapide', 'iam-certifications' ); ?>">
			<?php foreach ( $cartes as $type => $c ) : ?>
				<a class="iam-cat-type iam-cat-type--<?php echo esc_attr( $type ); ?>" href="<?php echo esc_url( add_query_arg( 'type', $type ) . '#iam-cat-liste' ); ?>">
					<span class="iam-cat-type__icone"><?php echo iam_cert_icon( $c['icone'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
					<span class="iam-cat-type__corps">
						<strong><?php echo esc_html( $c['titre'] ); ?> <em><?php echo (int) $par_type[ $type ]; ?></em></strong>
						<span><?php echo esc_html( $c['texte'] ); ?></span>
					</span>
					<span class="iam-cat-type__fleche"><?php echo iam_cert_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				</a>
			<?php endforeach; ?>
		</section>
	<?php endif; ?>

	<section class="iam-cat-wrap iam-cat-liste" id="iam-cat-liste">
		<?php
		echo do_shortcode( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			sprintf(
				'[iam_certifications filters="%s" orderby="menu_order title"%s]',
				'jamais' === $reglages['affichage'] ? 'false' : 'true',
				$terme ? ' domaine="' . esc_attr( $terme->slug ) . '"' : ''
			)
		);
		?>
	</section>

	<section class="iam-cat-wrap">
		<div class="iam-cat-cta">
			<div>
				<h2><?php esc_html_e( 'Une formation sur mesure pour votre équipe ?', 'iam-certifications' ); ?></h2>
				<p><?php esc_html_e( 'Tous nos séminaires s’organisent en intra, dans vos locaux ou sur un campus IAM, et s’adaptent à vos enjeux.', 'iam-certifications' ); ?></p>
			</div>
			<div class="iam-cat-cta__actions">
				<a class="iam-cat-cta__btn" href="<?php echo esc_url( 'mailto:' . $contact['email'] ); ?>"><?php echo iam_cert_icon( 'mail' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> <?php echo esc_html( $contact['email'] ); ?></a>
				<a class="iam-cat-cta__btn iam-cat-cta__btn--ghost" href="<?php echo esc_url( 'tel:' . $contact['tel_lien'] ); ?>"><?php echo iam_cert_icon( 'phone' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> <?php echo esc_html( $contact['tel'] ); ?></a>
			</div>
		</div>
	</section>

</main>
<?php
get_footer();
