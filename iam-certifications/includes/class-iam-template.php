<?php
/**
 * Page de détail (landing) d'une certification : hero + KPIs + formulaire
 * IAM Leads embarqué + contact direct.
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Prend en charge l'affichage single d'une certification.
 */
class IAM_Cert_Template {

	/**
	 * Enregistre les hooks.
	 *
	 * @return void
	 */
	public function register() {
		add_filter( 'template_include', array( $this, 'template_include' ) );
	}

	/**
	 * Remplace les templates single et catalogue par ceux du plugin (surchargeables par le thème).
	 *
	 * @param string $template Template résolu par WordPress.
	 * @return string
	 */
	public function template_include( $template ) {
		if ( is_post_type_archive( IAM_CERT_CPT ) || is_tax( IAM_CERT_TAX_DOMAINE ) ) {
			return $this->catalogue( $template );
		}

		if ( ! is_singular( IAM_CERT_CPT ) ) {
			return $template;
		}

		// Surcharge par le thème : theme/single-certification.php ou theme/iam-certifications/single-certification.php.
		$override = locate_template(
			array(
				'single-' . IAM_CERT_CPT . '.php',
				'iam-certifications/single-certification.php',
			)
		);
		if ( $override ) {
			return $override;
		}

		// Assets front.
		wp_enqueue_style( 'iam-cert-front' );
		wp_enqueue_style( 'iam-cert-single' );
		wp_enqueue_script( 'iam-cert-front' );
		wp_enqueue_script( 'iam-cert-animations' );

		return IAM_CERT_PATH . 'templates/single-certification.php';
	}

	/**
	 * Page catalogue (/certifications/ et pages de domaine), surchargeable
	 * par theme/iam-certifications/archive-certification.php.
	 *
	 * @param string $template Template résolu par WordPress.
	 * @return string
	 */
	private function catalogue( $template ) {
		$override = locate_template( array( 'iam-certifications/archive-certification.php' ) );
		if ( $override ) {
			return $override;
		}

		wp_enqueue_style( 'iam-cert-front' );
		wp_enqueue_script( 'iam-cert-front' );
		wp_enqueue_script( 'iam-cert-animations' );

		return IAM_CERT_PATH . 'templates/archive-certification.php';
	}
}
