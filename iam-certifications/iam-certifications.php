<?php
/**
 * Plugin Name:       IAM Certifications
 * Plugin URI:        https://groupeiam.com/
 * Description:        Gestion des certifications / formations certifiantes du Groupe IAM : custom post type, taxonomies, champs, shortcode [iam_certifications] et page de détail.
 * Version:           1.1.0
 * Author:            Groupe IAM
 * Author URI:        https://groupeiam.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       iam-certifications
 * Domain Path:       /languages
 * Requires at least: 6.0
 * Requires PHP:      7.4
 *
 * @package IAM_Certifications
 */

// Sécurité : bloquer l'accès direct.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// -----------------------------------------------------------------------------
// Constantes du plugin.
// -----------------------------------------------------------------------------
define( 'IAM_CERT_VERSION', '1.1.0' );
define( 'IAM_CERT_FILE', __FILE__ );
define( 'IAM_CERT_PATH', plugin_dir_path( __FILE__ ) );
define( 'IAM_CERT_URL', plugin_dir_url( __FILE__ ) );
define( 'IAM_CERT_BASENAME', plugin_basename( __FILE__ ) );

// Slug du CPT et des taxonomies, centralisés pour éviter les fautes de frappe.
define( 'IAM_CERT_CPT', 'certification' );
define( 'IAM_CERT_TAX_DOMAINE', 'iam_domaine' );
define( 'IAM_CERT_TAX_OUTIL', 'iam_outil' );

// -----------------------------------------------------------------------------
// Chargement des classes.
// -----------------------------------------------------------------------------
require_once IAM_CERT_PATH . 'includes/iam-cert-helpers.php';
require_once IAM_CERT_PATH . 'includes/class-iam-cpt.php';
require_once IAM_CERT_PATH . 'includes/class-iam-taxonomies.php';
require_once IAM_CERT_PATH . 'includes/class-iam-metaboxes.php';
require_once IAM_CERT_PATH . 'includes/class-iam-admin.php';
require_once IAM_CERT_PATH . 'includes/class-iam-admin-ui.php';
require_once IAM_CERT_PATH . 'includes/class-iam-assets.php';
require_once IAM_CERT_PATH . 'includes/class-iam-shortcode.php';
require_once IAM_CERT_PATH . 'includes/class-iam-template.php';
require_once IAM_CERT_PATH . 'includes/class-iam-seeder.php';

/**
 * Initialise le plugin (enregistrement CPT + taxonomies).
 *
 * @return void
 */
function iam_cert_init() {
	// Traductions.
	load_plugin_textdomain( 'iam-certifications', false, dirname( IAM_CERT_BASENAME ) . '/languages' );

	// Enregistrements.
	( new IAM_Cert_CPT() )->register();
	( new IAM_Cert_Taxonomies() )->register();
	( new IAM_Cert_Metaboxes() )->register();
	( new IAM_Cert_Assets() )->register();
	( new IAM_Cert_Shortcode() )->register();
	( new IAM_Cert_Template() )->register();

	if ( is_admin() ) {
		( new IAM_Cert_Admin() )->register();
		( new IAM_Cert_Admin_UI() )->register();
		( new IAM_Cert_Seeder() )->register();
	}
}
add_action( 'init', 'iam_cert_init' );

// -----------------------------------------------------------------------------
// Activation / désactivation.
// -----------------------------------------------------------------------------
/**
 * À l'activation : enregistre les types de contenu puis vide les règles de
 * réécriture pour que les permaliens des certifications fonctionnent tout de suite.
 *
 * @return void
 */
function iam_cert_activate() {
	( new IAM_Cert_CPT() )->register();
	( new IAM_Cert_Taxonomies() )->register();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'iam_cert_activate' );

/**
 * À la désactivation : nettoie les règles de réécriture.
 *
 * @return void
 */
function iam_cert_deactivate() {
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'iam_cert_deactivate' );
