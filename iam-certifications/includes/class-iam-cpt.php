<?php
/**
 * Custom Post Type « certification ».
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enregistre le CPT des certifications.
 */
class IAM_Cert_CPT {

	/**
	 * Enregistre le type de contenu « certification ».
	 *
	 * @return void
	 */
	public function register() {
		$labels = array(
			'name'                  => _x( 'Certifications', 'Nom général du post type', 'iam-certifications' ),
			'singular_name'         => _x( 'Certification', 'Nom singulier du post type', 'iam-certifications' ),
			'menu_name'             => _x( 'Certifications', 'Menu admin', 'iam-certifications' ),
			'name_admin_bar'        => _x( 'Certification', 'Barre admin', 'iam-certifications' ),
			'add_new'               => __( 'Ajouter', 'iam-certifications' ),
			'add_new_item'          => __( 'Ajouter une certification', 'iam-certifications' ),
			'new_item'              => __( 'Nouvelle certification', 'iam-certifications' ),
			'edit_item'             => __( 'Modifier la certification', 'iam-certifications' ),
			'view_item'             => __( 'Voir la certification', 'iam-certifications' ),
			'all_items'             => __( 'Toutes les certifications', 'iam-certifications' ),
			'search_items'          => __( 'Rechercher une certification', 'iam-certifications' ),
			'not_found'             => __( 'Aucune certification trouvée.', 'iam-certifications' ),
			'not_found_in_trash'    => __( 'Aucune certification dans la corbeille.', 'iam-certifications' ),
			'featured_image'        => __( 'Image de la certification', 'iam-certifications' ),
			'set_featured_image'    => __( 'Définir l’image', 'iam-certifications' ),
			'remove_featured_image' => __( 'Retirer l’image', 'iam-certifications' ),
			'use_featured_image'    => __( 'Utiliser comme image', 'iam-certifications' ),
			'items_list'            => __( 'Liste des certifications', 'iam-certifications' ),
			'archives'              => __( 'Archives des certifications', 'iam-certifications' ),
		);

		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Formations certifiantes du Groupe IAM.', 'iam-certifications' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			// Menu natif masqué : l'édition passe par l'interface dédiée du plugin
			// (classe IAM_Cert_Admin_UI), pas par l'éditeur WordPress.
			'show_in_menu'       => false,
			'show_in_rest'       => true, // Compatibilité éditeur de blocs / API REST.
			'menu_icon'          => 'dashicons-awards',
			'query_var'          => true,
			'rewrite'            => array(
				'slug'       => 'certifications',
				'with_front' => false,
			),
			'capability_type'    => 'post',
			'has_archive'        => 'certifications',
			'hierarchical'       => false,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		);

		register_post_type( IAM_CERT_CPT, $args );
	}
}
