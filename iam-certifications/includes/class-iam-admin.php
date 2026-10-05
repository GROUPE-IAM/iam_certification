<?php
/**
 * Personnalisations de l'écran d'administration des certifications :
 * colonnes de liste, tri et filtre par domaine.
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Améliore la liste des certifications dans wp-admin.
 */
class IAM_Cert_Admin {

	/**
	 * Enregistre les hooks.
	 *
	 * @return void
	 */
	public function register() {
		add_filter( 'manage_' . IAM_CERT_CPT . '_posts_columns', array( $this, 'columns' ) );
		add_action( 'manage_' . IAM_CERT_CPT . '_posts_custom_column', array( $this, 'column_content' ), 10, 2 );
		add_filter( 'manage_edit-' . IAM_CERT_CPT . '_sortable_columns', array( $this, 'sortable_columns' ) );
		add_action( 'restrict_manage_posts', array( $this, 'domaine_filter' ) );
		add_action( 'pre_get_posts', array( $this, 'sort_by_duree' ) );
	}

	/**
	 * Applique le tri par durée (nombre d'heures) dans l'admin.
	 *
	 * @param WP_Query $query Requête courante.
	 * @return void
	 */
	public function sort_by_duree( $query ) {
		if ( ! is_admin() || ! $query->is_main_query() ) {
			return;
		}
		if ( 'iam_duree' !== $query->get( 'orderby' ) ) {
			return;
		}
		$query->set( 'meta_key', '_iam_duree_heures' );
		$query->set( 'orderby', 'meta_value_num' );
	}

	/**
	 * Définit les colonnes de la liste.
	 *
	 * @param array $columns Colonnes existantes.
	 * @return array
	 */
	public function columns( $columns ) {
		$new = array();
		foreach ( $columns as $key => $label ) {
			$new[ $key ] = $label;
			// On insère nos colonnes juste après le titre.
			if ( 'title' === $key ) {
				$new['iam_duree']    = __( 'Durée', 'iam-certifications' );
				$new['iam_featured'] = __( 'Mise en avant', 'iam-certifications' );
			}
		}
		return $new;
	}

	/**
	 * Remplit le contenu des colonnes personnalisées.
	 *
	 * @param string $column  Clé de colonne.
	 * @param int    $post_id ID du post.
	 * @return void
	 */
	public function column_content( $column, $post_id ) {
		if ( 'iam_duree' === $column ) {
			$heures = get_post_meta( $post_id, '_iam_duree_heures', true );
			$texte  = get_post_meta( $post_id, '_iam_duree_texte', true );
			$parts  = array();
			if ( '' !== $heures ) {
				/* translators: %s : nombre d'heures */
				$parts[] = sprintf( __( '%s h', 'iam-certifications' ), $heures );
			}
			if ( $texte ) {
				$parts[] = $texte;
			}
			echo $parts ? esc_html( implode( ' · ', $parts ) ) : '—';
		}

		if ( 'iam_featured' === $column ) {
			$featured = get_post_meta( $post_id, '_iam_featured', true );
			echo $featured ? '★' : '—';
		}
	}

	/**
	 * Rend la colonne Durée triable (sur le nombre d'heures).
	 *
	 * @param array $columns Colonnes triables.
	 * @return array
	 */
	public function sortable_columns( $columns ) {
		$columns['iam_duree'] = 'iam_duree';
		return $columns;
	}

	/**
	 * Ajoute un filtre déroulant par domaine au-dessus de la liste.
	 *
	 * @param string $post_type Type de contenu de l'écran courant.
	 * @return void
	 */
	public function domaine_filter( $post_type ) {
		if ( IAM_CERT_CPT !== $post_type ) {
			return;
		}

		$taxonomy = IAM_CERT_TAX_DOMAINE;
		$selected = isset( $_GET[ $taxonomy ] ) ? sanitize_text_field( wp_unslash( $_GET[ $taxonomy ] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended

		wp_dropdown_categories(
			array(
				'show_option_all' => __( 'Tous les domaines', 'iam-certifications' ),
				'taxonomy'        => $taxonomy,
				'name'            => $taxonomy,
				'orderby'         => 'name',
				'value_field'     => 'slug',
				'selected'        => $selected,
				'hierarchical'    => true,
				'show_count'      => true,
				'hide_empty'      => false,
			)
		);
	}
}
