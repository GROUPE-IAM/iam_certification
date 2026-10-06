<?php
/**
 * Fonctions utilitaires : chargement de templates et accès aux données.
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Charge un template du plugin, surchargeable par le thème.
 *
 * Le thème peut remplacer un template en plaçant un fichier de même nom dans
 * son dossier « iam-certifications/ » (ex. wp-content/themes/mon-theme/iam-certifications/card.php).
 *
 * @param string $name Nom du fichier (ex. « card.php »).
 * @param array  $vars Variables mises à disposition du template.
 * @return void
 */
function iam_cert_get_template( $name, $vars = array() ) {
	$name = ltrim( $name, '/' );

	// 1) Surcharge par le thème.
	$located = locate_template( 'iam-certifications/' . $name );

	// 2) Template du plugin par défaut.
	if ( ! $located ) {
		$candidate = IAM_CERT_PATH . 'templates/' . $name;
		$located   = file_exists( $candidate ) ? $candidate : '';
	}

	if ( ! $located ) {
		return;
	}

	if ( $vars ) {
		extract( $vars, EXTR_SKIP ); // phpcs:ignore WordPress.PHP.DontExtract.extract_extract
	}

	include $located;
}

/**
 * Construit le libellé de durée « 50 h · 10 semaines ».
 *
 * @param int $post_id ID de la certification.
 * @return string
 */
function iam_cert_duree_label( $post_id ) {
	$heures = get_post_meta( $post_id, '_iam_duree_heures', true );
	$texte  = get_post_meta( $post_id, '_iam_duree_texte', true );

	$parts = array();
	if ( '' !== $heures ) {
		/* translators: %s : nombre d'heures */
		$parts[] = sprintf( __( '%s h', 'iam-certifications' ), $heures );
	}
	if ( $texte ) {
		$parts[] = $texte;
	}

	return implode( ' · ', $parts );
}

/**
 * Modules du programme : tableau de { titre, lecons[] }.
 *
 * @param int $post_id ID de la certification.
 * @return array
 */
function iam_cert_get_modules( $post_id ) {
	$modules = get_post_meta( $post_id, '_iam_modules', true );
	if ( ! is_array( $modules ) ) {
		return array();
	}

	$sortie = array();
	foreach ( $modules as $m ) {
		$sortie[] = array(
			'titre'  => isset( $m['titre'] ) ? (string) $m['titre'] : '',
			'lecons' => ( isset( $m['lecons'] ) && is_array( $m['lecons'] ) ) ? $m['lecons'] : array(),
		);
	}
	return $sortie;
}

/**
 * Compteurs du programme : nombre de modules et total de leçons.
 *
 * @param int $post_id ID de la certification.
 * @return array { modules:int, lecons:int }
 */
function iam_cert_counts( $post_id ) {
	$modules = iam_cert_get_modules( $post_id );
	$lecons  = 0;
	foreach ( $modules as $m ) {
		$lecons += count( $m['lecons'] );
	}
	return array(
		'modules' => count( $modules ),
		'lecons'  => $lecons,
	);
}

/**
 * Texte du bouton CTA (valeur personnalisée ou libellé par défaut).
 *
 * @param int $post_id ID de la certification.
 * @return string
 */
function iam_cert_cta_label( $post_id ) {
	$cta = get_post_meta( $post_id, '_iam_cta_texte', true );
	return $cta ? $cta : __( 'Candidater', 'iam-certifications' );
}

/**
 * Coordonnées du contact « certifications » (responsable des demandes).
 * Filtrable via « iam_cert_contact ».
 *
 * @return array { nom, email, tel, tel_lien }
 */
function iam_cert_contact() {
	$contact = array(
		'nom'      => __( 'Banel', 'iam-certifications' ),
		'email'    => 'banel@groupeiam.com',
		'tel'      => '+221 77 714 39 91',
		'tel_lien' => '+221777143991',
	);

	/**
	 * Permet de personnaliser le contact sans modifier le plugin.
	 *
	 * @param array $contact Coordonnées par défaut.
	 */
	return apply_filters( 'iam_cert_contact', $contact );
}

/**
 * Identifiant du formulaire IAM Leads à utiliser pour une certification.
 * Priorité : réglage de la certification, puis formulaire « certifications »
 * par défaut (option posée au moment du seed).
 *
 * @param int $post_id ID de la certification.
 * @return int 0 si aucun formulaire résolu.
 */
function iam_cert_form_id( $post_id ) {
	$id = absint( get_post_meta( $post_id, '_iam_form_id', true ) );

	if ( ! $id ) {
		$id = absint( get_option( 'iam_cert_default_form_id', 0 ) );
	}

	/**
	 * Filtre l'identifiant du formulaire résolu pour une certification.
	 *
	 * @param int $id      Identifiant du formulaire.
	 * @param int $post_id Certification.
	 */
	return (int) apply_filters( 'iam_cert_form_id', $id, $post_id );
}

/**
 * Rend le formulaire IAM Leads associé, ou un repli si le plugin/formulaire
 * est absent. Le formulaire est enveloppé pour permettre l'injection JS du
 * nom de la certification (champ caché + UTM).
 *
 * @param int $post_id ID de la certification.
 * @return string HTML.
 */
function iam_cert_render_form( $post_id ) {
	$contact = iam_cert_contact();

	// Repli si IAM Leads n'est pas actif.
	if ( ! shortcode_exists( 'iam_form' ) ) {
		return iam_cert_contact_fallback( $contact );
	}

	$form_id = iam_cert_form_id( $post_id );
	if ( ! $form_id ) {
		return iam_cert_contact_fallback( $contact );
	}

	$slug  = get_post_field( 'post_name', $post_id );
	$titre = get_the_title( $post_id );

	$html  = sprintf(
		'<div class="iam-cert-form" data-cert-title="%1$s" data-cert-slug="%2$s">',
		esc_attr( $titre ),
		esc_attr( $slug )
	);
	$html .= do_shortcode( sprintf( '[iam_form id="%d"]', $form_id ) );
	$html .= '</div>';

	return $html;
}

/**
 * Bloc de repli quand aucun formulaire n'est disponible : contact direct.
 *
 * @param array $contact Coordonnées.
 * @return string
 */
function iam_cert_contact_fallback( $contact ) {
	return sprintf(
		'<div class="iam-cert-form-fallback"><p>%1$s</p><p><a class="iam-cert-btn" href="mailto:%2$s">%3$s %4$s</a></p></div>',
		esc_html__( 'Pour candidater ou obtenir le programme détaillé, contactez-nous :', 'iam-certifications' ),
		esc_attr( $contact['email'] ),
		iam_cert_icon( 'mail' ), // phpcs:ignore
		esc_html( $contact['email'] )
	);
}

/**
 * HTML d'une ligne de module pour le répéteur d'admin.
 *
 * @param int|string $index  Index du module.
 * @param string     $titre  Titre.
 * @param array      $lecons Leçons.
 * @return string
 */
function iam_cert_module_row_html( $index, $titre, $lecons ) {
	$lecons_txt = is_array( $lecons ) ? implode( "\n", $lecons ) : '';
	ob_start();
	?>
	<div class="iam-module">
		<div class="iam-module__head">
			<span class="iam-module__drag" aria-hidden="true">⋮⋮</span>
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
	return ob_get_clean();
}

/**
 * Icône SVG inline, par nom. Renvoie une chaîne HTML sûre (SVG statique).
 *
 * @param string $name Nom de l'icône (clock, users, arrow, mail, phone).
 * @return string
 */
function iam_cert_icon( $name ) {
	$icons = array(
		'clock' => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>',
		'users' => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
		'arrow' => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>',
		'mail'  => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>',
		'phone' => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
		'play'     => '<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" aria-hidden="true"><path d="M8 5.5v13a1 1 0 0 0 1.5.86l10.4-6.5a1 1 0 0 0 0-1.72L9.5 4.64A1 1 0 0 0 8 5.5z"/></svg>',
		'download' => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 4v11M7 10l5 5 5-5M5 20h14"/></svg>',
		'calendar' => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/></svg>',
		'close'    => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg>',
		'check'    => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg>',
	);

	return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}

/* =========================================================================
 * Champs d'administration (partagés : écran maison + metabox classique)
 * ====================================================================== */

/**
 * Affiche une ligne de champ d'administration selon son type.
 * Types : text, number, textarea, list (textarea « une entrée par ligne »),
 * url, media (URL + bouton médiathèque).
 *
 * @param string $key   Clé meta (sert aussi d'id / name).
 * @param array  $args  Réglages du champ (label, type, desc, media).
 * @param string $value Valeur courante.
 * @return void
 */
function iam_cert_render_field_row( $key, $args, $value ) {
	$type  = isset( $args['type'] ) ? $args['type'] : 'text';
	$value = is_string( $value ) ? $value : '';

	echo '<div class="iam-cert-row iam-cert-row--' . esc_attr( $type ) . '">';
	printf( '<label for="%1$s"><strong>%2$s</strong></label>', esc_attr( $key ), esc_html( $args['label'] ) );

	switch ( $type ) {
		case 'textarea':
		case 'list':
			printf(
				'<textarea id="%1$s" name="%1$s" rows="%2$d" class="widefat">%3$s</textarea>',
				esc_attr( $key ),
				'list' === $type ? 5 : 3,
				esc_textarea( $value )
			);
			break;

		case 'media':
			echo '<span class="iam-media-field">';
			printf( '<input type="url" id="%1$s" name="%1$s" class="widefat" value="%2$s" placeholder="https://">', esc_attr( $key ), esc_attr( $value ) );
			printf(
				'<button type="button" class="button iam-media-pick" data-target="%1$s" data-library="%2$s">%3$s</button>',
				esc_attr( $key ),
				esc_attr( isset( $args['media'] ) ? $args['media'] : '' ),
				esc_html__( 'Médiathèque', 'iam-certifications' )
			);
			echo '</span>';
			break;

		default:
			printf(
				'<input type="%1$s" id="%2$s" name="%2$s" class="widefat" value="%3$s"%4$s>',
				esc_attr( in_array( $type, array( 'number', 'url' ), true ) ? $type : 'text' ),
				esc_attr( $key ),
				esc_attr( $value ),
				'url' === $type ? ' placeholder="https://"' : ''
			);
	}

	if ( ! empty( $args['desc'] ) ) {
		printf( '<span class="description">%s</span>', esc_html( $args['desc'] ) );
	}
	echo '</div>';
}

/* =========================================================================
 * Aides d'affichage pour la page de détail
 * ====================================================================== */

/**
 * Découpe un texte « une entrée par ligne » en tableau propre.
 * Les puces saisies à la main (-, •, *) sont retirées.
 *
 * @param string $text Texte brut.
 * @return string[]
 */
function iam_cert_lines( $text ) {
	if ( ! is_string( $text ) || '' === trim( $text ) ) {
		return array();
	}
	$lines = preg_split( '/\r\n|\r|\n/', $text );
	$lines = array_map(
		function ( $l ) {
			return trim( preg_replace( '/^\s*(?:[-*•·]|\d+[.)])\s*/u', '', $l ) );
		},
		$lines
	);
	return array_values( array_filter( $lines, 'strlen' ) );
}

/**
 * Rend une liste à puces (ou un paragraphe si une seule entrée).
 *
 * @param string $text  Texte « une entrée par ligne ».
 * @param string $class Classe CSS de la liste.
 * @return string HTML.
 */
function iam_cert_list_html( $text, $class = 'iam-cert-list' ) {
	$lines = iam_cert_lines( $text );
	if ( ! $lines ) {
		return '';
	}
	if ( 1 === count( $lines ) ) {
		return '<p class="' . esc_attr( $class ) . '__single">' . esc_html( $lines[0] ) . '</p>';
	}
	$html = '<ul class="' . esc_attr( $class ) . '">';
	foreach ( $lines as $line ) {
		$html .= '<li>' . esc_html( $line ) . '</li>';
	}
	return $html . '</ul>';
}

/**
 * Code d'intégration de la vidéo de présentation.
 * YouTube / Vimeo via oEmbed (WordPress), fichier vidéo via <video>.
 *
 * @param string $url URL de la vidéo.
 * @return string HTML (vide si l'URL n'est pas exploitable).
 */
function iam_cert_video_embed( $url ) {
	if ( ! $url ) {
		return '';
	}

	if ( preg_match( '/\.(mp4|webm|ogg)(\?.*)?$/i', $url ) ) {
		return sprintf( '<video src="%s" controls playsinline preload="none"></video>', esc_url( $url ) );
	}

	$embed = wp_oembed_get( $url, array( 'width' => 1280 ) );
	if ( ! $embed ) {
		return '';
	}

	// Lecture automatique à l'ouverture de la fenêtre (YouTube / Vimeo).
	return preg_replace_callback(
		'/src="([^"]+)"/',
		function ( $m ) {
			$src = html_entity_decode( $m[1] );
			$src = add_query_arg( array( 'autoplay' => 1, 'rel' => 0 ), $src );
			return 'src="' . esc_url( $src ) . '" allow="autoplay; fullscreen; picture-in-picture"';
		},
		$embed,
		1
	);
}

/**
 * Bloc dépliable (accordéon) coloré, accessible au clavier.
 * Sans JavaScript, le contenu reste visible (amélioration progressive).
 *
 * @param string $id      Identifiant unique.
 * @param string $title   Titre affiché.
 * @param string $content HTML du contenu (déjà échappé).
 * @param string $tone    « green » ou « lime ».
 * @param string $meta    Petite info sous le titre (optionnel).
 * @return string HTML.
 */
function iam_cert_accordion( $id, $title, $content, $tone = 'green', $meta = '' ) {
	$id = sanitize_html_class( $id );
	ob_start();
	?>
	<div class="iam-acc iam-acc--<?php echo esc_attr( $tone ); ?>">
		<h3 class="iam-acc__heading">
			<button type="button" class="iam-acc__btn" id="<?php echo esc_attr( $id ); ?>-btn" aria-expanded="true" aria-controls="<?php echo esc_attr( $id ); ?>">
				<span class="iam-acc__label">
					<span class="iam-acc__title"><?php echo esc_html( $title ); ?></span>
					<?php if ( $meta ) : ?>
						<span class="iam-acc__meta"><?php echo esc_html( $meta ); ?></span>
					<?php endif; ?>
				</span>
				<span class="iam-acc__icon" aria-hidden="true"></span>
			</button>
		</h3>
		<div class="iam-acc__panel" id="<?php echo esc_attr( $id ); ?>" role="region" aria-labelledby="<?php echo esc_attr( $id ); ?>-btn">
			<div class="iam-acc__inner">
				<div class="iam-acc__content"><?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- contenu échappé en amont. ?></div>
			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();
}
