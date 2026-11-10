<?php
/**
 * Pré-remplissage (seed) : les 8 certifications du site + le formulaire pro
 * multi-étapes dans IAM Leads. Idempotent (protégé par des options).
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Crée le contenu de démarrage.
 */
class IAM_Cert_Seeder {

	const OPT_CONTENT = 'iam_cert_content_seeded';
	const OPT_V12     = 'iam_cert_seed_v12';
	const OPT_V13     = 'iam_cert_seed_v13';
	const OPT_V131    = 'iam_cert_seed_v131';
	const OPT_V15     = 'iam_cert_seed_v15';
	const OPT_V16     = 'iam_cert_seed_v16';
	const OPT_V17     = 'iam_cert_seed_v17';
	const OPT_V172    = 'iam_cert_seed_v172';
	const OPT_V19     = 'iam_cert_seed_v19';
	const OPT_V110    = 'iam_cert_seed_v110';
	const OPT_V111    = 'iam_cert_seed_v111';
	const OPT_V111P   = 'iam_cert_seed_v111_prix';
	const OPT_FORM    = 'iam_cert_default_form_id';

	/**
	 * Enregistre les hooks. Le seed s'exécute au premier chargement de l'admin
	 * suivant l'activation (et retente le formulaire si IAM Leads est activé plus tard).
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'admin_init', array( $this, 'maybe_seed' ) );
	}

	/**
	 * Point d'entrée : contenu puis formulaire, chacun protégé.
	 *
	 * @return void
	 */
	public function maybe_seed() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		$this->seed_content();
		$this->seed_v12();
		$this->seed_v13();
		$this->seed_v131();
		$this->seed_v15();
		$this->seed_v16();
		$this->seed_v17();
		$this->seed_v172();
		$this->seed_v19();
		$this->seed_v110();
		$this->seed_v111();
		$this->seed_v111_prix();
		$this->seed_form();
	}

	/* ---------------------------------------------------------------------
	 * Certifications
	 * ------------------------------------------------------------------- */

	/**
	 * Crée les 8 certifications (données scrapées) si ce n'est pas déjà fait.
	 *
	 * @return void
	 */
	public function seed_content() {
		if ( get_option( self::OPT_CONTENT ) ) {
			return;
		}

		$data_file = IAM_CERT_PATH . 'includes/data/certifications-seed.php';
		if ( ! file_exists( $data_file ) ) {
			return;
		}
		$certifs = include $data_file;
		if ( ! is_array( $certifs ) ) {
			return;
		}

		foreach ( $certifs as $ordre => $c ) {
			$this->insert( $c, $ordre );
		}

		update_option( self::OPT_CONTENT, 1 );
	}

	/**
	 * v1.2 : type « certificat » posé sur les fiches existantes, puis import
	 * des séminaires et du certificat CEDLA.
	 *
	 * @return void
	 */
	public function seed_v12() {
		if ( get_option( self::OPT_V12 ) ) {
			return;
		}

		$existants = get_posts(
			array(
				'post_type'   => IAM_CERT_CPT,
				'post_status' => 'any',
				'numberposts' => -1,
				'fields'      => 'ids',
			)
		);
		foreach ( $existants as $post_id ) {
			if ( '' === get_post_meta( $post_id, '_iam_type', true ) ) {
				update_post_meta( $post_id, '_iam_type', 'certificat' );
			}
		}

		$data_file = IAM_CERT_PATH . 'includes/data/seminaires-seed.php';
		$items     = file_exists( $data_file ) ? include $data_file : array();
		if ( is_array( $items ) ) {
			$ordre = 100;
			foreach ( $items as $c ) {
				$this->insert( $c, $ordre++ );
			}
		}

		update_option( self::OPT_V12, 1 );
	}

	/**
	 * v1.3 : compléments tirés des catalogues (objectifs, projet final, rythme)
	 * et corrections de l'import d'origine. Non destructif : un champ rempli ou
	 * modifié à la main n'est jamais écrasé.
	 *
	 * @return void
	 */
	public function seed_v13() {
		if ( get_option( self::OPT_V13 ) ) {
			return;
		}

		$this->apply_complements();

		update_option( self::OPT_V13, 1 );
	}

	/**
	 * Compléments des catalogues : « fill » si vide, « fix » si la valeur est
	 * encore celle de l'import d'origine.
	 *
	 * @return void
	 */
	private function apply_complements() {
		$data_file = IAM_CERT_PATH . 'includes/data/complements-v13.php';
		$items     = file_exists( $data_file ) ? include $data_file : array();

		foreach ( (array) $items as $slug => $c ) {
			$post = get_page_by_path( $slug, OBJECT, IAM_CERT_CPT );
			if ( ! $post ) {
				continue;
			}
			foreach ( isset( $c['fill'] ) ? $c['fill'] : array() as $key => $value ) {
				if ( '' === trim( (string) get_post_meta( $post->ID, '_iam_' . $key, true ) ) ) {
					update_post_meta( $post->ID, '_iam_' . $key, $value );
				}
			}
			foreach ( isset( $c['fix'] ) ? $c['fix'] : array() as $key => $pair ) {
				if ( get_post_meta( $post->ID, '_iam_' . $key, true ) === $pair[0] ) {
					update_post_meta( $post->ID, '_iam_' . $key, $pair[1] );
				}
			}
		}
	}

	/**
	 * v1.3.1 : réparation des fiches existantes restées incomplètes (créées
	 * avant les imports, qui ne touchent pas une fiche déjà présente).
	 * Chaque champ VIDE est rempli depuis les catalogues : méta, modules,
	 * programme jour par jour, domaine, outils ; l'extrait suit l'accroche.
	 * Rien de ce qui est déjà renseigné n'est modifié.
	 *
	 * @return void
	 */
	public function seed_v131() {
		if ( get_option( self::OPT_V131 ) ) {
			return;
		}

		$items = array();
		foreach ( array( 'certifications-seed.php', 'seminaires-seed.php' ) as $file ) {
			$path  = IAM_CERT_PATH . 'includes/data/' . $file;
			$items = array_merge( $items, file_exists( $path ) ? (array) include $path : array() );
		}

		$alias = array( 'heures' => 'duree_heures' );

		foreach ( $items as $c ) {
			$post = get_page_by_path( $c['slug'], OBJECT, IAM_CERT_CPT );
			if ( ! $post ) {
				continue;
			}
			$id         = $post->ID;
			$hero_avant = trim( (string) get_post_meta( $id, '_iam_hero', true ) );

			foreach ( $c as $key => $value ) {
				if ( in_array( $key, array( 'titre', 'slug', 'domaine', 'outils', 'contenu' ), true ) ) {
					continue;
				}
				$meta    = '_iam_' . ( isset( $alias[ $key ] ) ? $alias[ $key ] : $key );
				$current = get_post_meta( $id, $meta, true );
				$vide    = is_array( $current ) ? ! $current : '' === trim( (string) $current );
				if ( $vide && ( is_array( $value ) ? $value : '' !== trim( (string) $value ) ) ) {
					update_post_meta( $id, $meta, $value );
				}
			}

			if ( '' === get_post_meta( $id, '_iam_type', true ) ) {
				update_post_meta( $id, '_iam_type', isset( $c['type'] ) ? $c['type'] : 'certificat' );
			}

			$terms = wp_get_object_terms( $id, IAM_CERT_TAX_DOMAINE, array( 'fields' => 'ids' ) );
			if ( ! is_wp_error( $terms ) && ! $terms ) {
				wp_set_object_terms( $id, $c['domaine'], IAM_CERT_TAX_DOMAINE, false );
			}
			$terms = wp_get_object_terms( $id, IAM_CERT_TAX_OUTIL, array( 'fields' => 'ids' ) );
			if ( ! is_wp_error( $terms ) && ! $terms ) {
				wp_set_object_terms( $id, $c['outils'], IAM_CERT_TAX_OUTIL, false );
			}

			// L'extrait (cartes du catalogue) suit l'accroche quand celle-ci vient d'être posée.
			if ( '' === $hero_avant || '' === trim( $post->post_excerpt ) ) {
				wp_update_post(
					array(
						'ID'           => $id,
						'post_excerpt' => get_post_meta( $id, '_iam_hero', true ),
					)
				);
			}
		}

		// Corrections et compléments des catalogues, après le remplissage.
		$this->apply_complements();

		update_option( self::OPT_V131, 1 );
	}

	/**
	 * v1.5 : visuel principal des formations. Les photos sont livrées dans
	 * assets/img/formations/<slug>.jpg (Unsplash, licence libre). Chacune est
	 * ajoutée à la médiathèque et posée comme image mise en avant, seulement
	 * si la fiche n'en a pas : un visuel choisi à la main n'est jamais remplacé.
	 * En cas d'échec d'un import, l'option n'est pas posée et la passe est
	 * retentée au chargement suivant de l'admin.
	 *
	 * @return void
	 */
	public function seed_v15() {
		if ( get_option( self::OPT_V15 ) ) {
			return;
		}

		if ( $this->importer_visuels() ) {
			update_option( self::OPT_V15, 1 );
		}
	}

	/**
	 * v1.6 : catalogue IAM Executive, domaine Data & Business Intelligence
	 * (3 formations courtes, au format séminaire), puis leurs visuels.
	 *
	 * @return void
	 */
	public function seed_v16() {
		if ( get_option( self::OPT_V16 ) ) {
			return;
		}

		$data_file = IAM_CERT_PATH . 'includes/data/executive-seed.php';
		$items     = file_exists( $data_file ) ? include $data_file : array();
		if ( is_array( $items ) ) {
			$ordre = 200;
			foreach ( $items as $c ) {
				$this->insert( $c, $ordre++ );
			}
		}

		if ( $this->importer_visuels() ) {
			update_option( self::OPT_V16, 1 );
		}
	}

	/**
	 * v1.7 : catalogue « Certificats professionnels 2025-2026 » de l'IAM
	 * E-Learning Center (parcours BBA, 19 certificats), puis leurs visuels.
	 *
	 * @return void
	 */
	public function seed_v17() {
		if ( get_option( self::OPT_V17 ) ) {
			return;
		}

		$data_file = IAM_CERT_PATH . 'includes/data/certificats-bba-seed.php';
		$items     = file_exists( $data_file ) ? include $data_file : array();
		if ( is_array( $items ) ) {
			$ordre = 300;
			foreach ( $items as $c ) {
				$this->insert( $c, $ordre++ );
			}
		}

		if ( $this->importer_visuels() ) {
			update_option( self::OPT_V17, 1 );
		}
	}

	/**
	 * v1.7.2 : tarif des certificats hors parcours BBA (350 000 à 450 000 FCFA,
	 * voir includes/data/tarifs-v172.php). Seulement si « Coût et financement »
	 * est vide : un tarif saisi à la main n'est jamais remplacé.
	 *
	 * @return void
	 */
	public function seed_v172() {
		if ( get_option( self::OPT_V172 ) ) {
			return;
		}

		$data_file = IAM_CERT_PATH . 'includes/data/tarifs-v172.php';
		$tarifs    = file_exists( $data_file ) ? include $data_file : array();

		foreach ( (array) $tarifs as $slug => $cout ) {
			$post = get_page_by_path( $slug, OBJECT, IAM_CERT_CPT );
			if ( $post && '' === trim( (string) get_post_meta( $post->ID, '_iam_cout', true ) ) ) {
				update_post_meta( $post->ID, '_iam_cout', $cout );
			}
		}

		update_option( self::OPT_V172, 1 );
	}

	/**
	 * v1.9 : les 162 séminaires de la « Proposition 2027 » (fiches 3FPT), puis
	 * leurs visuels (un par séminaire, assets/img/formations/<slug>.jpg).
	 * Les visuels sont importés par lots de 8 : la passe reprend au
	 * chargement suivant de l'admin tant qu'il en reste.
	 *
	 * @return void
	 */
	public function seed_v19() {
		if ( get_option( self::OPT_V19 ) ) {
			return;
		}

		$data_file = IAM_CERT_PATH . 'includes/data/seminaires-2027-seed.php';
		$items     = file_exists( $data_file ) ? include $data_file : array();
		if ( ! is_array( $items ) ) {
			return;
		}

		$ordre = 400;
		foreach ( $items as $c ) {
			$this->insert( $c, $ordre++ );
		}

		if ( $this->importer_visuels( 8 ) ) {
			update_option( self::OPT_V19, 1 );
		}
	}

	/**
	 * v1.10 : programme Cloud & IA de l'Innovation Center (IAM × Aviro).
	 * - crée les deux fiches « certificat » du catalogue (Cloud Foundations,
	 *   AI Foundations) à partir de includes/data/cloud-ia.php, la même source
	 *   que le bloc [iam_cloud_ia] de la page Innovation Center ;
	 * - pose leurs visuels ;
	 * - renomme les deux séminaires AWS de 3 jours, pour ne pas les confondre
	 *   avec les parcours de 13 semaines (seulement si le titre n'a pas été
	 *   modifié à la main).
	 *
	 * @return void
	 */
	public function seed_v110() {
		if ( get_option( self::OPT_V110 ) ) {
			return;
		}

		$data_file = IAM_CERT_PATH . 'includes/data/cloud-ia.php';
		$data      = file_exists( $data_file ) ? include $data_file : array();
		if ( ! is_array( $data ) || empty( $data['parcours'] ) ) {
			return;
		}

		// Clés propres au bloc Innovation Center, à ne pas stocker en méta.
		$hors_fiche = array( 'nom', 'num', 'certif', 'public_liste', 'appris', 'projet', 'debouches_c', 'image', 'image_alt', 'prix', 'deux_fois', 'detail', 'test' );
		$ordre      = 10;
		foreach ( $data['parcours'] as $p ) {
			$fiche            = array_diff_key( $p, array_flip( $hors_fiche ) );
			$fiche['contenu'] = $this->contenu_cloud_ia( $p, $data );
			$this->insert( $fiche, $ordre++ );
		}

		foreach ( (array) $data['renommages'] as $slug => $titres ) {
			$post = get_page_by_path( $slug, OBJECT, IAM_CERT_CPT );
			if ( $post && $titres[0] === $post->post_title ) {
				wp_update_post(
					array(
						'ID'         => $post->ID,
						'post_title' => $titres[1],
					)
				);
			}
		}

		if ( $this->importer_visuels() ) {
			update_option( self::OPT_V110, 1 );
		}
	}

	/**
	 * v1.11 : les thématiques du catalogue passent de 22 à 10
	 * (includes/data/domaines-v111.php).
	 *
	 * Pour chaque nouveau domaine : le terme de base est celui qui porte déjà
	 * ce nom ou ce slug, sinon il est créé ; il prend le nouveau nom, les
	 * formations des anciens domaines y sont rattachées et les anciens termes
	 * supprimés. Les anciennes adresses /domaine-certification/<slug>/ sont
	 * redirigées (301) et les thématiques mises en avant dans
	 * Formations → Page catalogue suivent.
	 *
	 * @return void
	 */
	public function seed_v111() {
		if ( get_option( self::OPT_V111 ) ) {
			return;
		}

		$data_file = IAM_CERT_PATH . 'includes/data/domaines-v111.php';
		$map       = file_exists( $data_file ) ? include $data_file : array();
		if ( ! is_array( $map ) || ! $map ) {
			return;
		}

		$termes = get_terms(
			array(
				'taxonomy'   => IAM_CERT_TAX_DOMAINE,
				'hide_empty' => false,
			)
		);
		if ( is_wp_error( $termes ) ) {
			return;
		}

		// Nom normalisé (ancien ou nouveau) => nouveau nom.
		$cible = array();
		foreach ( $map as $nouveau => $anciens ) {
			$cible[ self::nom_normalise( $nouveau ) ] = $nouveau;
			foreach ( $anciens as $ancien ) {
				$cible[ self::nom_normalise( $ancien ) ] = $nouveau;
			}
		}

		$groupes = array();
		foreach ( $termes as $t ) {
			$cle = self::nom_normalise( $t->name );
			if ( isset( $cible[ $cle ] ) ) {
				$groupes[ $cible[ $cle ] ][] = $t;
			}
		}

		$slugs = array(); // Ancien slug => nouveau slug.
		foreach ( $groupes as $nouveau => $liste ) {
			$slug_cible = sanitize_title( $nouveau );
			$base       = null;

			foreach ( $liste as $t ) {
				if ( self::nom_normalise( $t->name ) === self::nom_normalise( $nouveau ) ) {
					$base = $t;
					break;
				}
			}
			if ( ! $base ) {
				foreach ( $liste as $t ) {
					if ( $t->slug === $slug_cible ) {
						$base = $t;
						break;
					}
				}
			}
			if ( ! $base ) {
				$existant = get_term_by( 'slug', $slug_cible, IAM_CERT_TAX_DOMAINE );
				if ( $existant ) {
					$base = $existant;
				} else {
					$cree = wp_insert_term( $nouveau, IAM_CERT_TAX_DOMAINE, array( 'slug' => $slug_cible ) );
					if ( is_wp_error( $cree ) ) {
						continue;
					}
					$base = get_term( $cree['term_id'], IAM_CERT_TAX_DOMAINE );
				}
			}

			if ( $base->name !== $nouveau || $base->slug !== $slug_cible ) {
				$ancien_slug = $base->slug;
				$maj         = wp_update_term(
					$base->term_id,
					IAM_CERT_TAX_DOMAINE,
					array(
						'name' => $nouveau,
						'slug' => $slug_cible,
					)
				);
				if ( is_wp_error( $maj ) ) {
					// Slug déjà pris : on garde l'ancien, seul le nom change.
					wp_update_term( $base->term_id, IAM_CERT_TAX_DOMAINE, array( 'name' => $nouveau ) );
				}
				$base = get_term( $base->term_id, IAM_CERT_TAX_DOMAINE );
				if ( $ancien_slug !== $base->slug ) {
					$slugs[ $ancien_slug ] = $base->slug;
				}
			}

			foreach ( $liste as $t ) {
				if ( (int) $t->term_id === (int) $base->term_id ) {
					continue;
				}
				$objets = get_objects_in_term( (int) $t->term_id, IAM_CERT_TAX_DOMAINE );
				foreach ( is_wp_error( $objets ) ? array() : (array) $objets as $id ) {
					wp_set_object_terms( (int) $id, (int) $base->term_id, IAM_CERT_TAX_DOMAINE, true );
					wp_remove_object_terms( (int) $id, (int) $t->term_id, IAM_CERT_TAX_DOMAINE );
				}
				$slugs[ $t->slug ] = $base->slug;
				wp_delete_term( (int) $t->term_id, IAM_CERT_TAX_DOMAINE );
			}
		}

		// Redirections des anciennes adresses de thématique (chaînes résolues).
		$redir = array_merge( (array) get_option( 'iam_cert_domaines_redirections', array() ), $slugs );
		foreach ( $redir as $ancien => $nouveau ) {
			$tours = 0;
			while ( isset( $redir[ $nouveau ] ) && $redir[ $nouveau ] !== $nouveau && $tours++ < 10 ) {
				$nouveau = $redir[ $nouveau ];
			}
			$redir[ $ancien ] = $nouveau;
		}
		update_option( 'iam_cert_domaines_redirections', $redir, false );

		// Thématiques mises en avant dans la barre de filtres.
		$filtres = get_option( IAM_Cert_Filtres::OPTION );
		if ( is_array( $filtres ) && ! empty( $filtres['themes'] ) ) {
			$themes = array();
			foreach ( (array) $filtres['themes'] as $slug ) {
				$themes[] = isset( $redir[ $slug ] ) ? $redir[ $slug ] : $slug;
			}
			$filtres['themes'] = array_values( array_unique( $themes ) );
			update_option( IAM_Cert_Filtres::OPTION, $filtres );
		}

		update_option( self::OPT_V111, 1 );
	}

	/**
	 * v1.11 : les deux parcours Cloud & IA reviennent au prix de la page Aviro
	 * (sans la majoration de 50 000 FCFA posée en v1.10). Le tarif de la fiche
	 * et la phrase du Pack Excellence ne changent que s'ils sont encore ceux
	 * de la v1.10 : un texte modifié à la main n'est jamais remplacé.
	 *
	 * @return void
	 */
	public function seed_v111_prix() {
		if ( get_option( self::OPT_V111P ) ) {
			return;
		}

		$data_file = IAM_CERT_PATH . 'includes/data/cloud-ia.php';
		$data      = file_exists( $data_file ) ? include $data_file : array();
		if ( ! is_array( $data ) || empty( $data['parcours'] ) ) {
			return;
		}

		// Tarifs posés par la v1.10, par slug.
		$anciens = array(
			'cloud-foundations-aws-cloud-practitioner' => '460 000 FCFA examen inclus (formation 400 000 + examen AWS 60 000), ou en 2 fois : 2 × 230 000 FCFA par Orange Money, Wave ou sur place.',
			'ai-foundations-aws-ai-practitioner'       => '510 000 FCFA examen inclus (formation 450 000 + examen AWS 60 000), ou en 2 fois : 2 × 255 000 FCFA par Orange Money, Wave ou sur place.',
		);
		$pack_avant = 'à 820 000 FCFA au lieu de 970 000 FCFA';
		$pack_apres = 'à ' . $data['pack']['prix'] . ' FCFA au lieu de ' . $data['pack']['au_lieu'] . ' FCFA';

		foreach ( $data['parcours'] as $p ) {
			$post = get_page_by_path( $p['slug'], OBJECT, IAM_CERT_CPT );
			if ( ! $post ) {
				continue;
			}
			if ( isset( $anciens[ $p['slug'] ] ) && $anciens[ $p['slug'] ] === get_post_meta( $post->ID, '_iam_cout', true ) ) {
				update_post_meta( $post->ID, '_iam_cout', $p['cout'] );
			}
			if ( false !== strpos( $post->post_content, $pack_avant ) ) {
				wp_update_post(
					array(
						'ID'           => $post->ID,
						'post_content' => str_replace( $pack_avant, $pack_apres, $post->post_content ),
					)
				);
			}
		}

		update_option( self::OPT_V111P, 1 );
	}

	/**
	 * Nom de domaine comparable : sans accents ni casse, apostrophes et
	 * « × » unifiés, espaces réduits.
	 *
	 * @param string $nom Nom.
	 * @return string
	 */
	private static function nom_normalise( $nom ) {
		$nom = remove_accents( wp_specialchars_decode( (string) $nom, ENT_QUOTES ) );
		$nom = str_replace( array( '’', '‘', '×' ), array( "'", "'", 'x' ), $nom );
		return trim( preg_replace( '/\s+/', ' ', strtolower( $nom ) ) );
	}

	/**
	 * Présentation (contenu de la fiche) d'un parcours Cloud & IA.
	 *
	 * @param array $p    Parcours.
	 * @param array $data Données du programme.
	 * @return string HTML.
	 */
	private function contenu_cloud_ia( $p, $data ) {
		$test        = esc_url( $data['url'] . $p['test'] );
		$innovation  = esc_url( home_url( $data['innovation_page'] . '#formations-ia' ) );
		$apprentissages = '';
		foreach ( $p['appris'] as $a ) {
			$apprentissages .= '<li>' . esc_html( $a ) . '</li>';
		}

		return '<p>' . esc_html( $p['nom'] ) . ' est l’un des deux parcours du Centre d’excellence Cloud &amp; IA de l’Innovation Center du Groupe IAM, en partenariat avec Aviro. En 13 semaines, vous suivez les contenus officiels AWS accompagné par un formateur, puis vous passez l’examen ' . esc_html( $p['certif'] ) . ', inclus dans l’inscription, au centre Pearson VUE d’IAM ou en ligne.</p>'
			. '<p>Plus de 20 h en direct avec des experts (10 séances de 2 h et un bootcamp), des retours d’expérience, un projet en équipe, des labs pratiques, deux examens blancs corrigés et un groupe d’entraide animé chaque semaine.</p>'
			. '<h3>Vous apprendrez</h3><ul>' . $apprentissages . '</ul>'
			. '<h3>Avant de candidater</h3>'
			. '<p>Passez le <a href="' . $test . '" target="_blank" rel="noopener">test de positionnement en ligne</a> (15 questions, environ 15 minutes) : il confirme le parcours adapté à votre profil. Vous visez les deux certifications ? Le Pack Excellence regroupe Cloud Foundations puis AI Foundations à ' . esc_html( $data['pack']['prix'] ) . ' FCFA au lieu de ' . esc_html( $data['pack']['au_lieu'] ) . ' FCFA, examens inclus.</p>'
			. '<p><a href="' . $innovation . '">Découvrir tout le programme Cloud &amp; IA sur la page Innovation Center</a>.</p>';
	}

	/**
	 * Pose les visuels livrés dans assets/img/formations/<slug>.jpg (Unsplash,
	 * licence libre) comme image mise en avant, seulement pour les fiches qui
	 * n'en ont pas : un visuel choisi à la main n'est jamais remplacé.
	 *
	 * @param int $max Imports au plus pour cette passe (0 : sans limite).
	 * @return bool False si un import a échoué ou s'il en reste (la passe sera retentée).
	 */
	private function importer_visuels( $max = 0 ) {
		$images = glob( IAM_CERT_PATH . 'assets/img/formations/*.jpg' );
		if ( ! $images ) {
			return true;
		}

		require_once ABSPATH . 'wp-admin/includes/file.php';
		require_once ABSPATH . 'wp-admin/includes/media.php';
		require_once ABSPATH . 'wp-admin/includes/image.php';

		$ok      = true;
		$imports = 0;

		foreach ( $images as $source ) {
			$slug = basename( $source, '.jpg' );
			$post = get_page_by_path( $slug, OBJECT, IAM_CERT_CPT );
			if ( ! $post || has_post_thumbnail( $post ) ) {
				continue;
			}
			if ( $max && $imports >= $max ) {
				return false;
			}
			++$imports;

			// media_handle_sideload() déplace le fichier : on lui confie une copie.
			$copie = wp_tempnam( $slug . '.jpg' );
			if ( ! $copie || ! copy( $source, $copie ) ) {
				$ok = false;
				continue;
			}

			$piece = media_handle_sideload(
				array(
					'name'     => $slug . '.jpg',
					'tmp_name' => $copie,
				),
				$post->ID,
				get_the_title( $post )
			);

			if ( is_wp_error( $piece ) ) {
				wp_delete_file( $copie );
				$ok = false;
				continue;
			}

			update_post_meta( $piece, '_wp_attachment_image_alt', get_the_title( $post ) );
			set_post_thumbnail( $post, $piece );
		}

		return $ok;
	}

	/**
	 * Crée une formation à partir d'une entrée de données (ignorée si le slug existe).
	 * Toute clé hors titre/slug/domaine/outils devient une méta « _iam_<clé> ».
	 *
	 * @param array $c     Données.
	 * @param int   $ordre Ordre d'affichage.
	 * @return void
	 */
	private function insert( $c, $ordre ) {
		if ( get_page_by_path( $c['slug'], OBJECT, IAM_CERT_CPT ) ) {
			return;
		}

		$post_id = wp_insert_post(
			array(
				'post_type'    => IAM_CERT_CPT,
				'post_status'  => 'publish',
				'post_title'   => $c['titre'],
				'post_name'    => $c['slug'],
				'post_content' => isset( $c['contenu'] ) ? wp_kses_post( $c['contenu'] ) : '',
				'post_excerpt' => $c['hero'],
				'menu_order'   => $ordre,
			),
			true
		);
		if ( is_wp_error( $post_id ) || ! $post_id ) {
			return;
		}

		// Taxonomies (les termes manquants sont créés automatiquement).
		wp_set_object_terms( $post_id, $c['domaine'], IAM_CERT_TAX_DOMAINE, false );
		wp_set_object_terms( $post_id, $c['outils'], IAM_CERT_TAX_OUTIL, false );

		// Anciennes clés du premier jeu de données.
		$alias = array(
			'heures' => 'duree_heures',
		);
		foreach ( $c as $key => $value ) {
			if ( in_array( $key, array( 'titre', 'slug', 'domaine', 'outils' ), true ) ) {
				continue;
			}
			$meta = isset( $alias[ $key ] ) ? $alias[ $key ] : $key;
			update_post_meta( $post_id, '_iam_' . $meta, $value );
		}
		if ( empty( $c['type'] ) ) {
			update_post_meta( $post_id, '_iam_type', 'certificat' );
		}
	}

	/* ---------------------------------------------------------------------
	 * Formulaire IAM Leads
	 * ------------------------------------------------------------------- */

	/**
	 * Crée le formulaire pro multi-étapes dans IAM Leads (si actif et absent),
	 * l'enregistre comme formulaire par défaut, et ajoute Banel aux destinataires.
	 *
	 * @return void
	 */
	public function seed_form() {
		if ( ! class_exists( 'IAM_Leads_Form_Builder' ) ) {
			return;
		}

		// Déjà créé et toujours présent ? on ne refait rien.
		$existant = absint( get_option( self::OPT_FORM, 0 ) );
		if ( $existant && IAM_Leads_Form_Builder::get( $existant ) ) {
			return;
		}

		$form_id = IAM_Leads_Form_Builder::save(
			array(
				'nom'                  => __( 'Certifications — Candidature (professionnels)', 'iam-certifications' ),
				'bouton_texte'        => __( 'Envoyer ma candidature', 'iam-certifications' ),
				'message_confirmation' => __( 'Merci ! Votre candidature est enregistrée. L’équipe IAM vous recontacte sous 48h.', 'iam-certifications' ),
				'programme'            => '',
				'reglages'             => array(
					'mode_affichage'   => 'etapes',
					'progression'      => 'points',
					'bouton_precedent' => __( 'Précédent', 'iam-certifications' ),
					'bouton_suivant'   => __( 'Continuer', 'iam-certifications' ),
				),
				'champs'               => $this->form_fields(),
			)
		);

		if ( ! $form_id ) {
			return;
		}

		update_option( self::OPT_FORM, (int) $form_id );

		$this->ajouter_destinataire_banel();
	}

	/**
	 * Construit un champ complet à partir de valeurs partielles.
	 *
	 * @param array $args Valeurs du champ.
	 * @return array
	 */
	private function champ( $args ) {
		$defaut = array(
			'type'            => 'text',
			'label'           => '',
			'name'            => '',
			'placeholder'     => '',
			'required'        => 0,
			'options'         => array(),
			'width'           => 'full',
			'mapping'         => '',
			'valeur'          => '',
			'description'     => '',
			'label_prenom'    => '',
			'label_nom'       => '',
			'condition_field' => '',
			'condition_value' => '',
		);
		return array_merge( $defaut, $args );
	}

	/**
	 * Définition des champs du formulaire pro (3 étapes).
	 *
	 * @return array
	 */
	private function form_fields() {
		return array(
			// Étape 1 — Profil professionnel.
			$this->champ(
				array(
					'type'        => 'etape',
					'label'       => __( 'Votre profil professionnel', 'iam-certifications' ),
					'name'        => 'etape_profil',
					'description' => __( 'Parlez-nous de votre poste et de votre structure.', 'iam-certifications' ),
				)
			),
			$this->champ(
				array(
					'type'         => 'nom',
					'label'        => __( 'Votre nom', 'iam-certifications' ),
					'name'         => 'nom_complet',
					'required'     => 1,
					'label_prenom' => __( 'Prénom', 'iam-certifications' ),
					'label_nom'    => __( 'Nom de famille', 'iam-certifications' ),
				)
			),
			$this->champ(
				array(
					'type'     => 'text',
					'label'    => __( 'Poste actuel', 'iam-certifications' ),
					'name'     => 'poste_actuel',
					'required' => 1,
					'width'    => 'half',
				)
			),
			$this->champ(
				array(
					'type'  => 'text',
					'label' => __( 'Entreprise / organisation', 'iam-certifications' ),
					'name'  => 'entreprise',
					'width' => 'half',
				)
			),
			$this->champ(
				array(
					'type'    => 'select',
					'label'   => __( 'Secteur d’activité', 'iam-certifications' ),
					'name'    => 'secteur',
					'width'   => 'half',
					'options' => array(
						'Industrie', 'Services', 'Commerce / Distribution', 'Banque / Assurance',
						'Télécom / IT', 'Santé', 'Éducation', 'Secteur public', 'ONG / Association', 'Autre',
					),
				)
			),
			$this->champ(
				array(
					'type'    => 'select',
					'label'   => __( 'Taille de l’entreprise', 'iam-certifications' ),
					'name'    => 'taille_entreprise',
					'width'   => 'half',
					'options' => array( '1 à 9 salariés', '10 à 49 salariés', '50 à 249 salariés', '250 salariés et +' ),
				)
			),

			// Étape 2 — Projet.
			$this->champ(
				array(
					'type'        => 'etape',
					'label'       => __( 'Votre projet', 'iam-certifications' ),
					'name'        => 'etape_projet',
					'description' => __( 'Votre objectif et le cadre de la formation.', 'iam-certifications' ),
				)
			),
			// Champ caché rempli par la landing (JS) : rattache le lead à SA certification.
			$this->champ(
				array(
					'type'    => 'hidden',
					'label'   => __( 'Certification visée', 'iam-certifications' ),
					'name'    => 'certification',
					'mapping' => 'programme',
					'valeur'  => '',
				)
			),
			$this->champ(
				array(
					'type'    => 'select',
					'label'   => __( 'Objectif principal', 'iam-certifications' ),
					'name'    => 'objectif',
					'width'   => 'full',
					'options' => array(
						'Monter en compétences', 'Me reconvertir', 'Piloter un projet',
						'Former mon équipe', 'Autre',
					),
				)
			),
			$this->champ(
				array(
					'type'    => 'select',
					'label'   => __( 'Financement envisagé', 'iam-certifications' ),
					'name'    => 'financement',
					'width'   => 'half',
					'options' => array( 'Entreprise / OPCO', 'Financement personnel', 'Dispositif public', 'À définir' ),
				)
			),
			$this->champ(
				array(
					'type'    => 'select',
					'label'   => __( 'Disponibilité', 'iam-certifications' ),
					'name'    => 'disponibilite',
					'width'   => 'half',
					'options' => array( 'Dès que possible', 'Sous 1 à 3 mois', 'Sous 3 à 6 mois', 'Je me renseigne' ),
				)
			),

			// Étape 3 — Coordonnées.
			$this->champ(
				array(
					'type'        => 'etape',
					'label'       => __( 'Vos coordonnées', 'iam-certifications' ),
					'name'        => 'etape_contact',
					'description' => __( 'Pour vous recontacter.', 'iam-certifications' ),
				)
			),
			$this->champ(
				array(
					'type'     => 'email',
					'label'    => __( 'E-mail professionnel', 'iam-certifications' ),
					'name'     => 'email',
					'mapping'  => 'email',
					'required' => 1,
					'width'    => 'half',
				)
			),
			$this->champ(
				array(
					'type'     => 'tel',
					'label'    => __( 'Téléphone', 'iam-certifications' ),
					'name'     => 'telephone',
					'mapping'  => 'telephone',
					'required' => 1,
					'width'    => 'half',
				)
			),
			$this->champ(
				array(
					'type'    => 'radio',
					'label'   => __( 'Moyen de contact préféré', 'iam-certifications' ),
					'name'    => 'contact_prefere',
					'mapping' => 'contact_prefere',
					'options' => array( 'E-mail', 'Téléphone', 'WhatsApp' ),
				)
			),
			$this->champ(
				array(
					'type'     => 'acceptance',
					'label'    => __( 'J’accepte d’être recontacté(e) par le Groupe IAM au sujet de cette formation.', 'iam-certifications' ),
					'name'     => 'consentement',
					'mapping'  => 'consentement',
					'required' => 1,
				)
			),
		);
	}

	/**
	 * Ajoute banel@groupeiam.com aux destinataires internes d'IAM Leads,
	 * sans écraser les adresses déjà en place.
	 *
	 * @return void
	 */
	private function ajouter_destinataire_banel() {
		$contact = iam_cert_contact();
		$email   = $contact['email'];

		$settings = (array) get_option( 'iam_leads_settings', array() );
		$actuels  = isset( $settings['admin_emails'] ) ? (string) $settings['admin_emails'] : '';

		$liste = array_filter( array_map( 'trim', explode( ',', $actuels ) ) );

		if ( ! in_array( $email, $liste, true ) ) {
			$liste[]                  = $email;
			$settings['admin_emails'] = implode( ', ', $liste );
			update_option( 'iam_leads_settings', $settings );
		}
	}
}
