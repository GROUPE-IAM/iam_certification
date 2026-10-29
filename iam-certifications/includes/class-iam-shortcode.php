<?php
/**
 * Shortcode [iam_certifications] : liste des certifications en grille de cartes.
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enregistre et rend le shortcode de liste.
 */
class IAM_Cert_Shortcode {

	/**
	 * Enregistre les hooks.
	 *
	 * @return void
	 */
	public function register() {
		add_shortcode( 'iam_certifications', array( $this, 'render' ) );
	}

	/**
	 * Rend le shortcode.
	 *
	 * @param array|string $atts Attributs.
	 * @return string
	 */
	public function render( $atts ) {
		$atts = shortcode_atts(
			array(
				'type'             => '',      // « certificat » ou « seminaire » (vide = tous).
				'domaine'          => '',      // Slug(s) de domaine, séparés par des virgules.
				'outil'            => '',      // Slug(s) d'outil.
				'ids'              => '',      // Formations précises (ID séparés par des virgules), dans cet ordre.
				'limit'            => -1,      // Nombre de certifications (-1 = toutes).
				'columns'          => 3,       // Colonnes sur grand écran (1 à 4).
				'featured'         => '',      // "true" pour ne montrer que les mises en avant.
				'orderby'          => 'menu_order title',
				'order'            => 'ASC',
				'group_by_domaine' => '',      // "true" : titres de section par domaine (façon site actuel).
				'filters'          => 'auto',  // Barre de filtres (thématique, format, recherche) : « auto » dès 4 formations, « true » toujours, « false » jamais.
				'max_tools'        => 6,       // Nombre d'outils affichés sur la carte avant « +N ».
			),
			$atts,
			'iam_certifications'
		);

		// Chargement des assets à la demande.
		wp_enqueue_style( 'iam-cert-front' );
		wp_enqueue_script( 'iam-cert-front' );
		wp_enqueue_script( 'iam-cert-animations' );

		$query = $this->build_query( $atts );

		if ( ! $query->have_posts() ) {
			return '<p class="iam-cert-empty">' . esc_html__( 'Aucune certification disponible pour le moment.', 'iam-certifications' ) . '</p>';
		}

		$group = ( 'true' === $atts['group_by_domaine'] );

		ob_start();
		echo '<div class="iam-cert">';

		$filtres = 'true' === $atts['filters'] || ( 'auto' === $atts['filters'] && count( $query->posts ) >= 4 );
		if ( $filtres ) {
			$this->render_filter_bar( $query );
		}

		if ( $group ) {
			$this->render_grouped( $query, $atts );
		} else {
			$this->render_grid( $query, $atts );
		}

		if ( $filtres ) {
			printf(
				'<div class="iam-filtre__vide" hidden><p>%s</p><button type="button" class="iam-cert-btn" data-filtre-reset>%s</button></div>',
				esc_html__( 'Aucune formation ne correspond à ces critères.', 'iam-certifications' ),
				esc_html__( 'Voir toutes les formations', 'iam-certifications' )
			);
		}

		echo '</div>';
		wp_reset_postdata();

		return ob_get_clean();
	}

	/**
	 * Construit la WP_Query à partir des attributs.
	 *
	 * @param array $atts Attributs nettoyés.
	 * @return WP_Query
	 */
	private function build_query( $atts ) {
		$args = array(
			'post_type'      => IAM_CERT_CPT,
			'post_status'    => 'publish',
			'posts_per_page' => (int) $atts['limit'],
			'orderby'        => sanitize_text_field( $atts['orderby'] ),
			'order'          => 'DESC' === strtoupper( $atts['order'] ) ? 'DESC' : 'ASC',
			'no_found_rows'  => true,
		);

		// Formations choisies une à une : affichées dans l'ordre donné.
		$ids = array_filter( array_map( 'absint', explode( ',', (string) $atts['ids'] ) ) );
		if ( $ids ) {
			$args['post__in'] = $ids;
			$args['orderby']  = 'post__in';
		}

		$tax_query = array();

		if ( '' !== $atts['domaine'] ) {
			$tax_query[] = array(
				'taxonomy' => IAM_CERT_TAX_DOMAINE,
				'field'    => 'slug',
				'terms'    => array_map( 'sanitize_title', explode( ',', $atts['domaine'] ) ),
			);
		}

		if ( '' !== $atts['outil'] ) {
			$tax_query[] = array(
				'taxonomy' => IAM_CERT_TAX_OUTIL,
				'field'    => 'slug',
				'terms'    => array_map( 'sanitize_title', explode( ',', $atts['outil'] ) ),
			);
		}

		if ( count( $tax_query ) > 1 ) {
			$tax_query['relation'] = 'AND';
		}

		if ( $tax_query ) {
			$args['tax_query'] = $tax_query; // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query
		}

		$meta_query = array();

		if ( 'true' === $atts['featured'] ) {
			$meta_query[] = array(
				'key'   => '_iam_featured',
				'value' => '1',
			);
		}

		if ( 'seminaire' === $atts['type'] ) {
			$meta_query[] = array(
				'key'   => '_iam_type',
				'value' => 'seminaire',
			);
		} elseif ( 'certificat' === $atts['type'] ) {
			// Les fiches antérieures à la v1.2 n'ont pas de type : ce sont des certificats.
			$meta_query[] = array(
				'relation' => 'OR',
				array(
					'key'   => '_iam_type',
					'value' => 'certificat',
				),
				array(
					'key'     => '_iam_type',
					'compare' => 'NOT EXISTS',
				),
			);
		}

		if ( $meta_query ) {
			$args['meta_query'] = $meta_query; // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_query
		}

		return new WP_Query( $args );
	}

	/**
	 * Grille simple de cartes.
	 *
	 * @param WP_Query $query Résultats.
	 * @param array    $atts  Attributs.
	 * @return void
	 */
	private function render_grid( $query, $atts ) {
		$cols = max( 1, min( 4, (int) $atts['columns'] ) );
		printf( '<div class="iam-cert-grid" style="--iam-cols:%d;">', $cols );
		while ( $query->have_posts() ) {
			$query->the_post();
			$this->render_card( get_post(), $atts );
		}
		echo '</div>';
	}

	/**
	 * Cartes regroupées par domaine, avec un titre de section par domaine.
	 *
	 * @param WP_Query $query Résultats.
	 * @param array    $atts  Attributs.
	 * @return void
	 */
	private function render_grouped( $query, $atts ) {
		$cols     = max( 1, min( 4, (int) $atts['columns'] ) );
		$buckets  = array();
		$sans_dom = array();

		while ( $query->have_posts() ) {
			$query->the_post();
			$post  = get_post();
			$terms = get_the_terms( $post->ID, IAM_CERT_TAX_DOMAINE );
			if ( $terms && ! is_wp_error( $terms ) ) {
				$term = $terms[0];
				if ( ! isset( $buckets[ $term->term_id ] ) ) {
					$buckets[ $term->term_id ] = array(
						'term'  => $term,
						'posts' => array(),
					);
				}
				$buckets[ $term->term_id ]['posts'][] = $post;
			} else {
				$sans_dom[] = $post;
			}
		}

		foreach ( $buckets as $bucket ) {
			printf(
				'<section class="iam-cert-section"><h2 class="iam-cert-section__title">%s</h2>',
				esc_html( $bucket['term']->name )
			);
			$count = count( $bucket['posts'] );
			printf(
				'<p class="iam-cert-section__count">%s</p>',
				esc_html( sprintf( _n( '%d programme', '%d programmes', $count, 'iam-certifications' ), $count ) )
			);
			printf( '<div class="iam-cert-grid" style="--iam-cols:%d;">', $cols );
			foreach ( $bucket['posts'] as $post ) {
				setup_postdata( $GLOBALS['post'] = $post ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
				$this->render_card( $post, $atts );
			}
			echo '</div></section>';
		}

		if ( $sans_dom ) {
			printf( '<section class="iam-cert-section"><div class="iam-cert-grid" style="--iam-cols:%d;">', $cols );
			foreach ( $sans_dom as $post ) {
				setup_postdata( $GLOBALS['post'] = $post ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
				$this->render_card( $post, $atts );
			}
			echo '</div></section>';
		}
	}

	/**
	 * Barre de filtres : recherche, format (en ligne, hybride, présentiel),
	 * type et thématique. Filtrage côté client via les data-attributs des
	 * cartes ; les compteurs sont recalculés par iam-front.js.
	 *
	 * @param WP_Query $query Résultats (pour lister les choix présents).
	 * @return void
	 */
	private function render_filter_bar( $query ) {
		$themes = array();
		$poids  = array();
		$modes  = array();
		$types  = array();

		foreach ( $query->posts as $post ) {
			$t = get_the_terms( $post->ID, IAM_CERT_TAX_DOMAINE );
			if ( $t && ! is_wp_error( $t ) ) {
				$themes[ $t[0]->slug ] = $t[0]->name;
				$poids[ $t[0]->slug ]  = ( $poids[ $t[0]->slug ] ?? 0 ) + 1;
			}
			$modes[ iam_cert_mode( $post->ID ) ] = true;
			$types[ iam_cert_type( $post->ID ) ] = true;
		}

		$icones = array(
			''           => 'grid',
			'en-ligne'   => 'monitor',
			'hybride'    => 'hybrid',
			'presentiel' => 'pin',
		);
		// Les 3 thématiques les plus fournies sont visibles d'office, les autres s'ajoutent par « + ».
		arsort( $poids );
		$en_vue = array_slice( array_keys( $poids ), 0, 3 );
		$cachees = count( $themes ) - count( $en_vue );

		$choix_modes = array( '' => __( 'Tous les formats', 'iam-certifications' ) ) + array_intersect_key( iam_cert_modes(), $modes );
		?>
		<div class="iam-filtre" data-iam-filtre>
			<div class="iam-filtre__haut">
				<label class="iam-filtre__recherche">
					<span class="iam-filtre__loupe"><?php echo iam_cert_icon( 'search' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
					<span class="screen-reader-text"><?php esc_html_e( 'Rechercher une formation', 'iam-certifications' ); ?></span>
					<input type="search" data-filtre-q autocomplete="off" placeholder="<?php esc_attr_e( 'Une formation, un outil, un métier…', 'iam-certifications' ); ?>">
					<kbd aria-hidden="true">/</kbd>
				</label>

				<?php if ( count( $choix_modes ) > 2 ) : ?>
					<div class="iam-filtre__modes" role="group" aria-label="<?php esc_attr_e( 'Format', 'iam-certifications' ); ?>">
						<span class="iam-filtre__curseur" aria-hidden="true"></span>
						<?php foreach ( $choix_modes as $cle => $nom ) : ?>
							<button type="button" class="iam-filtre__mode" data-filtre="mode" data-valeur="<?php echo esc_attr( $cle ); ?>" aria-pressed="<?php echo '' === $cle ? 'true' : 'false'; ?>">
								<?php echo iam_cert_icon( $icones[ $cle ] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								<span class="iam-filtre__libelle"><?php echo esc_html( '' === $cle ? __( 'Tous', 'iam-certifications' ) : $nom ); ?></span>
								<span class="iam-filtre__n" data-n></span>
							</button>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if ( count( $themes ) > 1 ) : ?>
				<div class="iam-filtre__themes" role="group" aria-label="<?php esc_attr_e( 'Thématique', 'iam-certifications' ); ?>">
					<button type="button" class="iam-filtre__theme" data-filtre="theme" data-valeur="" aria-pressed="true">
						<?php esc_html_e( 'Toutes', 'iam-certifications' ); ?> <span class="iam-filtre__n" data-n></span>
					</button>
					<?php foreach ( $themes as $slug => $nom ) : ?>
						<button type="button" class="iam-filtre__theme" data-filtre="theme" data-valeur="<?php echo esc_attr( $slug ); ?>" aria-pressed="false"<?php echo in_array( $slug, $en_vue, true ) ? ' data-en-vue' : ' hidden'; ?>>
							<?php echo esc_html( $nom ); ?> <span class="iam-filtre__n" data-n></span><span class="iam-filtre__retirer" aria-hidden="true">×</span>
						</button>
					<?php endforeach; ?>
					<?php if ( $cachees > 0 ) : ?>
						<button type="button" class="iam-filtre__plus" data-filtre-ouvrir aria-haspopup="dialog">
							<span class="iam-filtre__plus-icone" aria-hidden="true">+</span>
							<span><?php esc_html_e( 'Thématiques', 'iam-certifications' ); ?></span>
							<span class="iam-filtre__n" data-filtre-autres><?php echo (int) $cachees; ?></span>
						</button>
					<?php endif; ?>
				</div>

				<?php if ( $cachees > 0 ) : ?>
					<dialog class="iam-filtre__modale" data-filtre-modale aria-labelledby="iam-filtre-titre">
						<div class="iam-filtre__modale-tete">
							<div>
								<p class="iam-filtre__modale-sur"><?php esc_html_e( 'Filtrer par thématique', 'iam-certifications' ); ?></p>
								<h3 id="iam-filtre-titre"><?php esc_html_e( 'Ajoutez les thématiques qui vous intéressent', 'iam-certifications' ); ?></h3>
							</div>
							<button type="button" class="iam-filtre__fermer" data-filtre-fermer aria-label="<?php esc_attr_e( 'Fermer', 'iam-certifications' ); ?>"><?php echo iam_cert_icon( 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></button>
						</div>
						<div class="iam-filtre__options">
							<?php foreach ( $themes as $slug => $nom ) : ?>
								<button type="button" class="iam-filtre__option" data-filtre="theme" data-valeur="<?php echo esc_attr( $slug ); ?>" aria-pressed="false">
									<span class="iam-filtre__coche" aria-hidden="true"><?php echo iam_cert_icon( 'check' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
									<span class="iam-filtre__option-nom"><?php echo esc_html( $nom ); ?></span>
									<span class="iam-filtre__n" data-n></span>
								</button>
							<?php endforeach; ?>
						</div>
						<div class="iam-filtre__modale-pied">
							<button type="button" class="iam-filtre__reset" data-filtre="theme" data-valeur="" data-filtre-garde><?php esc_html_e( 'Tout désélectionner', 'iam-certifications' ); ?></button>
							<button type="button" class="iam-cert-btn" data-filtre-fermer><?php esc_html_e( 'Voir', 'iam-certifications' ); ?> <strong data-filtre-total-modale></strong> <span data-filtre-mot-modale><?php esc_html_e( 'formations', 'iam-certifications' ); ?></span></button>
						</div>
					</dialog>
				<?php endif; ?>
			<?php endif; ?>

			<div class="iam-filtre__etat">
				<p class="iam-filtre__total" aria-live="polite"><strong data-filtre-total><?php echo (int) count( $query->posts ); ?></strong> <span data-filtre-mot><?php esc_html_e( 'formations', 'iam-certifications' ); ?></span></p>

				<?php if ( count( $types ) > 1 ) : ?>
					<div class="iam-filtre__types" role="group" aria-label="<?php esc_attr_e( 'Type de formation', 'iam-certifications' ); ?>">
						<button type="button" data-filtre="type" data-valeur="" aria-pressed="true"><?php esc_html_e( 'Tout', 'iam-certifications' ); ?></button>
						<button type="button" data-filtre="type" data-valeur="certificat" aria-pressed="false"><?php esc_html_e( 'Certificats', 'iam-certifications' ); ?> <span class="iam-filtre__n" data-n></span></button>
						<button type="button" data-filtre="type" data-valeur="seminaire" aria-pressed="false"><?php esc_html_e( 'Séminaires', 'iam-certifications' ); ?> <span class="iam-filtre__n" data-n></span></button>
					</div>
				<?php endif; ?>

				<button type="button" class="iam-filtre__reset" data-filtre-reset hidden><?php esc_html_e( 'Effacer les filtres', 'iam-certifications' ); ?></button>
			</div>
		</div>
		<?php
	}

	/**
	 * Rend une carte via le template (surchargeable par le thème).
	 *
	 * @param WP_Post $post Certification.
	 * @param array   $atts Attributs du shortcode.
	 * @return void
	 */
	private function render_card( $post, $atts ) {
		iam_cert_get_template(
			'card.php',
			array(
				'post' => $post,
				'atts' => $atts,
			)
		);
	}
}
