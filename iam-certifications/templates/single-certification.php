<?php
/**
 * Template : page de détail (landing) d'une certification.
 *
 * Structure :
 *   1. Hero plein écran sur l'image de la formation (titre, accroche, puces,
 *      vidéo de présentation, boutons Candidater / Prendre rendez-vous).
 *   2. Bande « Conditions d'admission » + blocs dépliables Objectifs /
 *      Programme / Évaluation.
 *   3. Bande image + « Débouchés » (et outils).
 *   4. Bande « Durée, rythme et modalités » + blocs Durée / Coût.
 *   5. Bandeau de téléchargement (brochure, dossier de candidature).
 *   6. Candidature : formulaire IAM Leads + contact direct.
 *
 * Chaque bloc dont le contenu est vide est masqué automatiquement.
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
	$m          = function ( $key ) use ( $post_id ) {
		$v = get_post_meta( $post_id, $key, true );
		return is_string( $v ) ? trim( $v ) : '';
	};
	$hero       = $m( '_iam_hero' );
	$public     = $m( '_iam_public' );
	$prerequis  = $m( '_iam_prerequis' );
	$objectifs  = $m( '_iam_objectifs' );
	$debouches  = $m( '_iam_debouches' );
	$evaluation = $m( '_iam_evaluation' );
	$cout       = $m( '_iam_cout' );
	$niveau     = $m( '_iam_niveau' );
	$format     = $m( '_iam_format' );
	$heures     = $m( '_iam_duree_heures' );
	$duree      = $m( '_iam_duree_texte' );
	$rythme     = $m( '_iam_rythme' );
	$video      = iam_cert_video_embed( $m( '_iam_video_url' ) );
	$rdv_url    = $m( '_iam_rdv_url' );
	$brochure   = $m( '_iam_brochure_url' );
	$dossier    = $m( '_iam_dossier_url' );
	$image2     = $m( '_iam_image2_url' );
	$cta        = iam_cert_cta_label( $post_id );
	$modules    = iam_cert_get_modules( $post_id );
	$counts     = iam_cert_counts( $post_id );
	$contact    = iam_cert_contact();
	$titre      = get_the_title();

	$domaines = get_the_terms( $post_id, IAM_CERT_TAX_DOMAINE );
	$domaine  = ( $domaines && ! is_wp_error( $domaines ) ) ? $domaines[0]->name : '';

	$outils = get_the_terms( $post_id, IAM_CERT_TAX_OUTIL );
	$outils = ( $outils && ! is_wp_error( $outils ) ) ? $outils : array();

	$thumb_id = get_post_thumbnail_id( $post_id );

	// Textes de compteurs réutilisés.
	$txt_modules = $counts['modules'] ? sprintf( _n( '%d module', '%d modules', $counts['modules'], 'iam-certifications' ), $counts['modules'] ) : '';
	$txt_lecons  = $counts['lecons'] ? sprintf( _n( '%d leçon', '%d leçons', $counts['lecons'], 'iam-certifications' ), $counts['lecons'] ) : '';

	// Puces du hero (on masque celles qui sont vides).
	$chips = array_filter(
		array(
			$txt_modules,
			'' !== $heures ? sprintf( __( '%s heures', 'iam-certifications' ), $heures ) : '',
			$duree,
			$format,
			$niveau ? sprintf( __( 'Niveau %s', 'iam-certifications' ), $niveau ) : '',
		)
	);

	/* ---------------------------------------------------------------
	 * Contenus des blocs dépliables
	 * ------------------------------------------------------------- */

	// Programme : liste des modules et de leurs leçons.
	$programme_html = '';
	if ( $modules ) {
		$programme_html .= '<ol class="iam-cert-prog">';
		foreach ( $modules as $module ) {
			$programme_html .= '<li class="iam-cert-prog__item">';
			$programme_html .= '<p class="iam-cert-prog__title">' . esc_html( $module['titre'] ) . '</p>';
			if ( $module['lecons'] ) {
				$programme_html .= '<ul class="iam-cert-prog__lecons">';
				foreach ( $module['lecons'] as $lecon ) {
					$programme_html .= '<li>' . esc_html( $lecon ) . '</li>';
				}
				$programme_html .= '</ul>';
			}
			$programme_html .= '</li>';
		}
		$programme_html .= '</ol>';
	}

	// Durée : tableau récapitulatif.
	$duree_rows = array_filter(
		array(
			__( 'Volume horaire', 'iam-certifications' ) => '' !== $heures ? $heures . ' h' : '',
			__( 'Durée', 'iam-certifications' )          => $duree,
			__( 'Rythme', 'iam-certifications' )         => $rythme,
			__( 'Format', 'iam-certifications' )         => $format,
			__( 'Niveau', 'iam-certifications' )         => $niveau ? ucfirst( $niveau ) : '',
			__( 'Programme', 'iam-certifications' )      => trim( $txt_modules . ( $txt_lecons ? ', ' . $txt_lecons : '' ) ),
		)
	);
	$duree_html = '';
	if ( $duree_rows ) {
		$duree_html .= '<dl class="iam-cert-dl">';
		foreach ( $duree_rows as $label => $val ) {
			$duree_html .= '<div><dt>' . esc_html( $label ) . '</dt><dd>' . esc_html( $val ) . '</dd></div>';
		}
		$duree_html .= '</dl>';
	}

	$cout_html = $cout ? wpautop( esc_html( $cout ) ) : '';
	$eval_html = $evaluation ? wpautop( esc_html( $evaluation ) ) : '';

	$has_admission = $prerequis || $public;
	$has_band1     = $has_admission || $objectifs || $programme_html || $eval_html;
	$has_band2     = $debouches || $outils;
	$has_band3     = $duree_html || $cout_html;
	$has_downloads = $brochure || $dossier;
	?>
	<div class="iam-cert iam-cert-single">

		<!-- 1. HERO -->
		<header class="iam-cert-hero<?php echo $thumb_id ? ' has-image' : ''; ?>">
			<?php if ( $thumb_id ) : ?>
				<?php echo wp_get_attachment_image( $thumb_id, 'full', false, array( 'class' => 'iam-cert-hero__bg', 'alt' => '', 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?>
			<?php endif; ?>

			<div class="iam-cert-wrap iam-cert-hero__inner">
				<div class="iam-cert-hero__text">
					<?php if ( $domaine ) : ?>
						<p class="iam-cert-hero__badge"><?php echo esc_html( $domaine ); ?></p>
					<?php endif; ?>

					<h1 class="iam-cert-hero__title"><?php echo esc_html( $titre ); ?></h1>

					<?php if ( $hero ) : ?>
						<div class="iam-cert-hero__sub"><?php echo wpautop( esc_html( $hero ) ); // phpcs:ignore ?></div>
					<?php endif; ?>

					<?php if ( $chips ) : ?>
						<ul class="iam-cert-chips" aria-label="<?php esc_attr_e( 'En bref', 'iam-certifications' ); ?>">
							<?php foreach ( $chips as $chip ) : ?>
								<li class="iam-cert-chip"><?php echo esc_html( $chip ); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>

				<div class="iam-cert-hero__aside">
					<?php if ( $video ) : ?>
						<button type="button" class="iam-cert-play" data-iam-video-open aria-haspopup="dialog">
							<span class="iam-cert-play__circle"><?php echo iam_cert_icon( 'play' ); // phpcs:ignore ?></span>
							<span class="iam-cert-play__label"><?php esc_html_e( 'Voir la vidéo de présentation', 'iam-certifications' ); ?></span>
						</button>
					<?php endif; ?>

					<div class="iam-cert-hero__ctas">
						<a class="iam-cert-btn iam-cert-btn--primary" href="#iam-cert-candidature">
							<?php echo esc_html( $cta ); ?>
						</a>
						<?php if ( $rdv_url ) : ?>
							<a class="iam-cert-btn iam-cert-btn--ghost" href="<?php echo esc_url( $rdv_url ); ?>" target="_blank" rel="noopener">
								<span class="iam-cert-btn__icon"><?php echo iam_cert_icon( 'calendar' ); // phpcs:ignore ?></span>
								<?php esc_html_e( 'Prendre rendez-vous', 'iam-certifications' ); ?>
							</a>
						<?php elseif ( $brochure ) : ?>
							<a class="iam-cert-btn iam-cert-btn--ghost" href="<?php echo esc_url( $brochure ); ?>" download>
								<span class="iam-cert-btn__icon"><?php echo iam_cert_icon( 'download' ); // phpcs:ignore ?></span>
								<?php esc_html_e( 'Brochure', 'iam-certifications' ); ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</header>

		<?php if ( $video ) : ?>
			<dialog class="iam-cert-video" aria-label="<?php esc_attr_e( 'Vidéo de présentation', 'iam-certifications' ); ?>">
				<button type="button" class="iam-cert-video__close" data-iam-video-close>
					<?php echo iam_cert_icon( 'close' ); // phpcs:ignore ?>
					<span class="screen-reader-text"><?php esc_html_e( 'Fermer la vidéo', 'iam-certifications' ); ?></span>
				</button>
				<div class="iam-cert-video__frame"></div>
				<template class="iam-cert-video__tpl"><?php echo $video; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- oEmbed WordPress. ?></template>
			</dialog>
		<?php endif; ?>

		<!-- 2. ADMISSION + OBJECTIFS / PROGRAMME / ÉVALUATION -->
		<?php if ( $has_band1 ) : ?>
			<section class="iam-cert-band" aria-labelledby="iam-cert-admission-title">
				<div class="iam-cert-band__text">
					<div class="iam-cert-band__text-inner">
						<h2 class="iam-cert-h2" id="iam-cert-admission-title"><?php esc_html_e( 'Conditions d’admission', 'iam-certifications' ); ?></h2>
						<?php if ( $prerequis ) : ?>
							<?php echo iam_cert_list_html( $prerequis ); // phpcs:ignore ?>
						<?php endif; ?>
						<?php if ( $public ) : ?>
							<h3 class="iam-cert-h3"><?php esc_html_e( 'Public concerné', 'iam-certifications' ); ?></h3>
							<p class="iam-cert-band__p"><?php echo esc_html( $public ); ?></p>
						<?php endif; ?>
						<?php if ( ! $has_admission ) : ?>
							<p class="iam-cert-band__p"><?php esc_html_e( 'Formation ouverte à tous les profils motivés. Contactez-nous pour vérifier votre éligibilité.', 'iam-certifications' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="iam-cert-band__stack">
					<?php
					$tone = 'green';
					if ( $objectifs ) {
						echo iam_cert_accordion( 'iam-acc-objectifs', __( 'Objectifs', 'iam-certifications' ), iam_cert_list_html( $objectifs, 'iam-cert-checks' ), $tone ); // phpcs:ignore
						$tone = 'lime';
					}
					if ( $programme_html ) {
						echo iam_cert_accordion( 'iam-acc-programme', __( 'Contenu de la formation', 'iam-certifications' ), $programme_html, $tone, trim( $txt_modules . ( $txt_lecons ? ', ' . $txt_lecons : '' ) ) ); // phpcs:ignore
						$tone = 'lime' === $tone ? 'green' : 'lime';
					}
					if ( $eval_html ) {
						echo iam_cert_accordion( 'iam-acc-evaluation', __( 'Évaluation & certification', 'iam-certifications' ), $eval_html, $tone ); // phpcs:ignore
					}
					?>
				</div>
			</section>
		<?php endif; ?>

		<!-- 3. IMAGE + DÉBOUCHÉS -->
		<?php if ( $has_band2 ) : ?>
			<section class="iam-cert-band iam-cert-band--media" aria-labelledby="iam-cert-debouches-title">
				<div class="iam-cert-band__media">
					<?php if ( $image2 ) : ?>
						<img src="<?php echo esc_url( $image2 ); ?>" alt="" loading="lazy" decoding="async">
					<?php elseif ( $thumb_id ) : ?>
						<?php echo wp_get_attachment_image( $thumb_id, 'large', false, array( 'alt' => '', 'loading' => 'lazy' ) ); ?>
					<?php else : ?>
						<span class="iam-cert-band__media-fallback" aria-hidden="true"></span>
					<?php endif; ?>
				</div>
				<div class="iam-cert-band__text iam-cert-band__text--center">
					<div class="iam-cert-band__text-inner">
						<?php if ( $debouches ) : ?>
							<h2 class="iam-cert-h2" id="iam-cert-debouches-title"><?php esc_html_e( 'Débouchés', 'iam-certifications' ); ?></h2>
							<?php echo iam_cert_list_html( $debouches ); // phpcs:ignore ?>
						<?php endif; ?>
						<?php if ( $outils ) : ?>
							<?php if ( $debouches ) : ?>
								<h3 class="iam-cert-h3"><?php esc_html_e( 'Outils & technologies', 'iam-certifications' ); ?></h3>
							<?php else : ?>
								<h2 class="iam-cert-h2" id="iam-cert-debouches-title"><?php esc_html_e( 'Outils & technologies', 'iam-certifications' ); ?></h2>
							<?php endif; ?>
							<ul class="iam-cert-tags">
								<?php foreach ( $outils as $outil ) : ?>
									<li><?php echo esc_html( $outil->name ); ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<!-- 4. DURÉE, RYTHME, MODALITÉS -->
		<?php if ( $has_band3 ) : ?>
			<section class="iam-cert-band" aria-labelledby="iam-cert-modalites-title">
				<div class="iam-cert-band__text">
					<div class="iam-cert-band__text-inner">
						<h2 class="iam-cert-h2" id="iam-cert-modalites-title"><?php esc_html_e( 'Durée, rythme et modalités de la formation', 'iam-certifications' ); ?></h2>
						<?php if ( $format || $duree ) : ?>
							<p class="iam-cert-band__p">
								<?php
								echo esc_html(
									trim(
										implode(
											' ',
											array_filter(
												array(
													$format ? sprintf( __( 'Formation %s.', 'iam-certifications' ), lcfirst( $format ) ) : '',
													$duree ? sprintf( __( 'Durée : %s.', 'iam-certifications' ), $duree ) : '',
												)
											)
										)
									)
								);
								?>
							</p>
						<?php endif; ?>
					</div>
				</div>
				<div class="iam-cert-band__stack">
					<?php
					if ( $duree_html ) {
						echo iam_cert_accordion( 'iam-acc-duree', __( 'Durée de la formation', 'iam-certifications' ), $duree_html, 'green' ); // phpcs:ignore
					}
					if ( $cout_html ) {
						echo iam_cert_accordion( 'iam-acc-cout', __( 'Coût et scolarité', 'iam-certifications' ), $cout_html, $duree_html ? 'lime' : 'green' ); // phpcs:ignore
					}
					?>
				</div>
			</section>
		<?php endif; ?>

		<!-- CONTENU LIBRE (éditeur WordPress, optionnel) -->
		<?php if ( trim( get_the_content() ) ) : ?>
			<section class="iam-cert-wrap iam-cert-prose"><?php the_content(); ?></section>
		<?php endif; ?>

		<!-- 5. TÉLÉCHARGEMENTS -->
		<?php if ( $has_downloads ) : ?>
			<section class="iam-cert-downloads">
				<div class="iam-cert-wrap">
					<h2 class="iam-cert-downloads__title">
						<?php
						if ( $brochure && $dossier ) {
							esc_html_e( 'Téléchargez la brochure et le dossier de candidature', 'iam-certifications' );
						} elseif ( $brochure ) {
							esc_html_e( 'Téléchargez la brochure de la formation', 'iam-certifications' );
						} else {
							esc_html_e( 'Téléchargez le dossier de candidature', 'iam-certifications' );
						}
						?>
					</h2>
					<div class="iam-cert-downloads__btns">
						<?php if ( $brochure ) : ?>
							<a class="iam-cert-btn iam-cert-btn--primary" href="<?php echo esc_url( $brochure ); ?>" download>
								<span class="iam-cert-btn__icon"><?php echo iam_cert_icon( 'download' ); // phpcs:ignore ?></span>
								<?php esc_html_e( 'Brochure', 'iam-certifications' ); ?>
							</a>
						<?php endif; ?>
						<?php if ( $dossier ) : ?>
							<a class="iam-cert-btn iam-cert-btn--ghost" href="<?php echo esc_url( $dossier ); ?>" download>
								<span class="iam-cert-btn__icon"><?php echo iam_cert_icon( 'download' ); // phpcs:ignore ?></span>
								<?php esc_html_e( 'Dossier de candidature', 'iam-certifications' ); ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<!-- 6. CANDIDATURE : formulaire IAM Leads + contact -->
		<section class="iam-cert-apply" id="iam-cert-candidature">
			<div class="iam-cert-wrap iam-cert-apply__grid">
				<div class="iam-cert-apply__intro">
					<h2 class="iam-cert-h2"><?php esc_html_e( 'Candidater à cette formation', 'iam-certifications' ); ?></h2>
					<p><?php esc_html_e( 'Renseignez vos informations : notre équipe vous recontacte avec le calendrier des prochaines sessions et les étapes d’admission.', 'iam-certifications' ); ?></p>

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

				<div class="iam-cert-apply__card">
					<?php echo iam_cert_render_form( $post_id ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>
			</div>
		</section>

		<!-- Barre d'action mobile -->
		<div class="iam-cert-stickybar" hidden>
			<span class="iam-cert-stickybar__title"><?php echo esc_html( $titre ); ?></span>
			<a class="iam-cert-btn iam-cert-btn--primary" href="#iam-cert-candidature"><?php echo esc_html( $cta ); ?></a>
		</div>

	</div>
	<?php
endwhile;

get_footer();
