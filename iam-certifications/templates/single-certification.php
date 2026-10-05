<?php
/**
 * Template : page de détail (landing) d'une certification, structure fidèle aux
 * fiches groupeiam.com — sans prix ni partenaire.
 *
 * Surchargeable : « votre-theme/single-certification.php ».
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

while ( have_posts() ) :
	the_post();

	$post_id    = get_the_ID();
	$hero       = get_post_meta( $post_id, '_iam_hero', true );
	$public     = get_post_meta( $post_id, '_iam_public', true );
	$prerequis  = get_post_meta( $post_id, '_iam_prerequis', true );
	$evaluation = get_post_meta( $post_id, '_iam_evaluation', true );
	$niveau     = get_post_meta( $post_id, '_iam_niveau', true );
	$format     = get_post_meta( $post_id, '_iam_format', true );
	$heures     = get_post_meta( $post_id, '_iam_duree_heures', true );
	$duree      = get_post_meta( $post_id, '_iam_duree_texte', true );
	$cta        = iam_cert_cta_label( $post_id );
	$modules    = iam_cert_get_modules( $post_id );
	$counts     = iam_cert_counts( $post_id );
	$contact    = iam_cert_contact();

	$domaines = get_the_terms( $post_id, IAM_CERT_TAX_DOMAINE );
	$domaine  = ( $domaines && ! is_wp_error( $domaines ) ) ? $domaines[0]->name : '';

	$outils = get_the_terms( $post_id, IAM_CERT_TAX_OUTIL );
	$outils = ( $outils && ! is_wp_error( $outils ) ) ? $outils : array();

	// Puces KPI du hero (on masque celles qui sont vides).
	$chips = array();
	if ( $counts['modules'] ) {
		$chips[] = sprintf( _n( '%d module', '%d modules', $counts['modules'], 'iam-certifications' ), $counts['modules'] );
	}
	if ( $counts['lecons'] ) {
		$chips[] = sprintf( _n( '%d leçon', '%d leçons', $counts['lecons'], 'iam-certifications' ), $counts['lecons'] );
	}
	if ( '' !== $heures ) {
		$chips[] = sprintf( __( '%s heures', 'iam-certifications' ), $heures );
	}
	if ( $duree ) {
		$chips[] = $duree;
	}
	if ( $niveau ) {
		$chips[] = sprintf( __( 'Niveau %s', 'iam-certifications' ), $niveau );
	}
	?>
	<div class="iam-cert iam-cert-single">

		<!-- HERO -->
		<header class="iam-cert-hero">
			<div class="iam-cert-hero__inner">
				<div class="iam-cert-hero__text">
					<?php if ( $domaine ) : ?>
						<span class="iam-cert-hero__badge"><?php echo esc_html( $domaine ); ?></span>
					<?php endif; ?>

					<h1 class="iam-cert-hero__title"><?php the_title(); ?></h1>

					<?php if ( $hero ) : ?>
						<p class="iam-cert-hero__sub"><?php echo esc_html( $hero ); ?></p>
					<?php endif; ?>

					<?php if ( $chips ) : ?>
						<ul class="iam-cert-chips">
							<?php foreach ( $chips as $chip ) : ?>
								<li class="iam-cert-chip"><?php echo esc_html( $chip ); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<a class="iam-cert-btn iam-cert-btn--lg" href="#iam-cert-candidature">
						<?php echo esc_html( $cta ); ?>
						<span class="iam-cert-btn__icon"><?php echo iam_cert_icon( 'arrow' ); // phpcs:ignore ?></span>
					</a>
				</div>

				<div class="iam-cert-hero__media">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large', array( 'class' => 'iam-cert-hero__img' ) ); ?>
					<?php else : ?>
						<span class="iam-cert-hero__img iam-cert-card__media-fallback" aria-hidden="true"></span>
					<?php endif; ?>
				</div>
			</div>
		</header>

		<!-- PROGRAMME -->
		<?php if ( $modules ) : ?>
			<section class="iam-cert-sec iam-cert-programme">
				<div class="iam-cert-sec__head">
					<h2 class="iam-cert-h2"><?php esc_html_e( 'Programme', 'iam-certifications' ); ?></h2>
					<p class="iam-cert-sec__meta">
						<?php
						echo esc_html(
							trim(
								sprintf(
									/* translators: 1: modules, 2: leçons */
									__( '%1$s · %2$s', 'iam-certifications' ),
									sprintf( _n( '%d module', '%d modules', $counts['modules'], 'iam-certifications' ), $counts['modules'] ),
									$counts['lecons'] ? sprintf( _n( '%d leçon', '%d leçons', $counts['lecons'], 'iam-certifications' ), $counts['lecons'] ) : ''
								),
								' ·'
							)
						);
						?>
					</p>
				</div>

				<div class="iam-cert-modules">
					<?php foreach ( $modules as $index => $module ) : ?>
						<article class="iam-cert-module">
							<div class="iam-cert-module__num"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></div>
							<div class="iam-cert-module__body">
								<h3 class="iam-cert-module__title"><?php echo esc_html( $module['titre'] ); ?></h3>
								<?php if ( $module['lecons'] ) : ?>
									<span class="iam-cert-module__count">
										<?php echo esc_html( sprintf( _n( '%d leçon', '%d leçons', count( $module['lecons'] ), 'iam-certifications' ), count( $module['lecons'] ) ) ); ?>
									</span>
									<ul class="iam-cert-module__lecons">
										<?php foreach ( $module['lecons'] as $lecon ) : ?>
											<li><?php echo esc_html( $lecon ); ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</section>
		<?php endif; ?>

		<!-- ÉVALUATION -->
		<?php if ( $evaluation ) : ?>
			<section class="iam-cert-sec iam-cert-eval">
				<h2 class="iam-cert-h2"><?php esc_html_e( 'Évaluation & certification', 'iam-certifications' ); ?></h2>
				<p><?php echo esc_html( $evaluation ); ?></p>
			</section>
		<?php endif; ?>

		<!-- CONTENU LIBRE (optionnel) -->
		<?php if ( trim( get_the_content() ) ) : ?>
			<section class="iam-cert-sec iam-cert-prose"><?php the_content(); ?></section>
		<?php endif; ?>

		<!-- RÉCAP + PUBLIC / PRÉREQUIS -->
		<section class="iam-cert-sec iam-cert-facts">
			<table class="iam-cert-recap">
				<tbody>
					<?php if ( $counts['modules'] ) : ?>
						<tr><th><?php esc_html_e( 'Modules', 'iam-certifications' ); ?></th><td><?php echo esc_html( $counts['modules'] ); ?></td></tr>
					<?php endif; ?>
					<?php if ( $counts['lecons'] ) : ?>
						<tr><th><?php esc_html_e( 'Leçons', 'iam-certifications' ); ?></th><td><?php echo esc_html( $counts['lecons'] ); ?></td></tr>
					<?php endif; ?>
					<?php if ( '' !== $heures ) : ?>
						<tr><th><?php esc_html_e( 'Volume horaire', 'iam-certifications' ); ?></th><td><?php echo esc_html( $heures . ' h' ); ?></td></tr>
					<?php endif; ?>
					<?php if ( $duree ) : ?>
						<tr><th><?php esc_html_e( 'Durée', 'iam-certifications' ); ?></th><td><?php echo esc_html( $duree ); ?></td></tr>
					<?php endif; ?>
					<?php if ( $niveau ) : ?>
						<tr><th><?php esc_html_e( 'Niveau', 'iam-certifications' ); ?></th><td><?php echo esc_html( ucfirst( $niveau ) ); ?></td></tr>
					<?php endif; ?>
					<?php if ( $format ) : ?>
						<tr><th><?php esc_html_e( 'Format', 'iam-certifications' ); ?></th><td><?php echo esc_html( $format ); ?></td></tr>
					<?php endif; ?>
				</tbody>
			</table>

			<div class="iam-cert-facts__text">
				<?php if ( $public ) : ?>
					<div class="iam-cert-fact">
						<h3 class="iam-cert-h3"><?php esc_html_e( 'Public concerné', 'iam-certifications' ); ?></h3>
						<p><?php echo esc_html( $public ); ?></p>
					</div>
				<?php endif; ?>
				<?php if ( $prerequis ) : ?>
					<div class="iam-cert-fact">
						<h3 class="iam-cert-h3"><?php esc_html_e( 'Prérequis', 'iam-certifications' ); ?></h3>
						<p><?php echo esc_html( $prerequis ); ?></p>
					</div>
				<?php endif; ?>
				<?php if ( $outils ) : ?>
					<div class="iam-cert-fact">
						<h3 class="iam-cert-h3"><?php esc_html_e( 'Outils & technologies', 'iam-certifications' ); ?></h3>
						<ul class="iam-cert-card__tools iam-cert-outils__list">
							<?php foreach ( $outils as $outil ) : ?>
								<li class="iam-cert-card__tool"><?php echo esc_html( $outil->name ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
		</section>

		<!-- CANDIDATURE : formulaire IAM Leads + contact -->
		<section class="iam-cert-sec iam-cert-apply" id="iam-cert-candidature">
			<div class="iam-cert-apply__card">
				<h2 class="iam-cert-h2"><?php esc_html_e( 'Demander une information', 'iam-certifications' ); ?></h2>
				<p class="iam-cert-apply__intro"><?php esc_html_e( 'Un parcours pensé pour les professionnels. Renseignez vos informations, notre équipe vous recontacte avec le calendrier des prochaines sessions.', 'iam-certifications' ); ?></p>

				<?php echo iam_cert_render_form( $post_id ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

				<div class="iam-cert-contact">
					<p class="iam-cert-contact__title"><?php esc_html_e( 'Ou contactez directement :', 'iam-certifications' ); ?></p>
					<p class="iam-cert-contact__line">
						<span class="iam-cert-card__icon"><?php echo iam_cert_icon( 'mail' ); // phpcs:ignore ?></span>
						<a href="mailto:<?php echo esc_attr( $contact['email'] ); ?>"><?php echo esc_html( $contact['email'] ); ?></a>
					</p>
					<p class="iam-cert-contact__line">
						<span class="iam-cert-card__icon"><?php echo iam_cert_icon( 'phone' ); // phpcs:ignore ?></span>
						<a href="tel:<?php echo esc_attr( $contact['tel_lien'] ); ?>"><?php echo esc_html( $contact['tel'] ); ?></a>
					</p>
				</div>
			</div>
		</section>

	</div>
	<?php
endwhile;

get_footer();
