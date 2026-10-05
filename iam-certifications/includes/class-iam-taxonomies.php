<?php
/**
 * Taxonomies des certifications : domaine (catégorie) et outil (technos).
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enregistre les taxonomies rattachées au CPT « certification ».
 */
class IAM_Cert_Taxonomies {

	/**
	 * Enregistre toutes les taxonomies.
	 *
	 * @return void
	 */
	public function register() {
		$this->register_domaine();
		$this->register_outil();
	}

	/**
	 * Taxonomie « Domaine » : hiérarchique (comportement de catégorie),
	 * sert à regrouper les certifications par section (Marketing Digital, IA…).
	 *
	 * @return void
	 */
	private function register_domaine() {
		$labels = array(
			'name'              => _x( 'Domaines', 'Taxonomie domaine', 'iam-certifications' ),
			'singular_name'     => _x( 'Domaine', 'Taxonomie domaine singulier', 'iam-certifications' ),
			'search_items'      => __( 'Rechercher un domaine', 'iam-certifications' ),
			'all_items'         => __( 'Tous les domaines', 'iam-certifications' ),
			'parent_item'       => __( 'Domaine parent', 'iam-certifications' ),
			'parent_item_colon' => __( 'Domaine parent :', 'iam-certifications' ),
			'edit_item'         => __( 'Modifier le domaine', 'iam-certifications' ),
			'update_item'       => __( 'Mettre à jour le domaine', 'iam-certifications' ),
			'add_new_item'      => __( 'Ajouter un domaine', 'iam-certifications' ),
			'new_item_name'     => __( 'Nom du nouveau domaine', 'iam-certifications' ),
			'menu_name'         => __( 'Domaines', 'iam-certifications' ),
		);

		register_taxonomy(
			IAM_CERT_TAX_DOMAINE,
			array( IAM_CERT_CPT ),
			array(
				'labels'            => $labels,
				'hierarchical'      => true,
				'public'            => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_rest'      => true,
				'query_var'         => true,
				'rewrite'           => array(
					'slug'       => 'domaine-certification',
					'with_front' => false,
				),
			)
		);
	}

	/**
	 * Taxonomie « Outil » : non hiérarchique (comportement d'étiquettes),
	 * pour les badges d'outils / technologies (Bubble, ChatGPT, Odoo…).
	 *
	 * @return void
	 */
	private function register_outil() {
		$labels = array(
			'name'                       => _x( 'Outils', 'Taxonomie outil', 'iam-certifications' ),
			'singular_name'              => _x( 'Outil', 'Taxonomie outil singulier', 'iam-certifications' ),
			'search_items'               => __( 'Rechercher un outil', 'iam-certifications' ),
			'popular_items'              => __( 'Outils les plus utilisés', 'iam-certifications' ),
			'all_items'                  => __( 'Tous les outils', 'iam-certifications' ),
			'edit_item'                  => __( 'Modifier l’outil', 'iam-certifications' ),
			'update_item'                => __( 'Mettre à jour l’outil', 'iam-certifications' ),
			'add_new_item'               => __( 'Ajouter un outil', 'iam-certifications' ),
			'new_item_name'              => __( 'Nom du nouvel outil', 'iam-certifications' ),
			'separate_items_with_commas' => __( 'Séparer les outils par des virgules', 'iam-certifications' ),
			'add_or_remove_items'        => __( 'Ajouter ou retirer des outils', 'iam-certifications' ),
			'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés', 'iam-certifications' ),
			'menu_name'                  => __( 'Outils', 'iam-certifications' ),
		);

		register_taxonomy(
			IAM_CERT_TAX_OUTIL,
			array( IAM_CERT_CPT ),
			array(
				'labels'            => $labels,
				'hierarchical'      => false,
				'public'            => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_rest'      => true,
				'query_var'         => true,
				'rewrite'           => array(
					'slug'       => 'outil-certification',
					'with_front' => false,
				),
			)
		);
	}
}
