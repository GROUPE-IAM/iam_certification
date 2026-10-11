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

		update_option( self::OPT_V13, 1 );
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
				'post_content' => '',
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
