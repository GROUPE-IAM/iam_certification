<?php
/**
 * Désinstallation d'IAM Certifications.
 *
 * Par prudence, on ne supprime PAS les certifications ni les leads (données
 * métier). On nettoie uniquement les options techniques du plugin.
 *
 * Pour tout supprimer (posts inclus), définir dans wp-config.php :
 *   define( 'IAM_CERT_SUPPRIMER_DONNEES', true );
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Options techniques.
delete_option( 'iam_cert_content_seeded' );
delete_option( 'iam_cert_default_form_id' );

// Suppression complète, seulement si explicitement demandé.
if ( defined( 'IAM_CERT_SUPPRIMER_DONNEES' ) && IAM_CERT_SUPPRIMER_DONNEES ) {
	$certifs = get_posts(
		array(
			'post_type'      => 'certification',
			'post_status'    => 'any',
			'numberposts'    => -1,
			'fields'         => 'ids',
			'no_found_rows'  => true,
		)
	);

	foreach ( $certifs as $id ) {
		wp_delete_post( $id, true );
	}
}
