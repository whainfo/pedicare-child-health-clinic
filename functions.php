<?php
/**
 * PediCare Child Health Clinic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PediCare Child Health Clinic
 * @since 1.0
 */


if (! function_exists('PediCare_Child_Health_Clinic_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function PediCare_Child_Health_Clinic_support() {

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support('align-wide');

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
        global $pagenow;
        if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
            wp_safe_redirect( admin_url("themes.php?page=pedicare-child-health-clinic-guide-page") );
        }
	}
endif;
add_action( 'after_setup_theme', 'PediCare_Child_Health_Clinic_support' );


/* Theme Credit link */
define('PEDICARE_FAQ',__('https://pedicare.webhelpagency.com/documentation/','pedicare-child-health-clinic'));
define('PEDICARE_DEMO',__('https://pedicare.webhelpagency.com/','pedicare-child-health-clinic'));
define('PEDICARE_SUPPORT',__('https://wordpress.org/support/theme/pedicare/','pedicare-child-health-clinic'));
define('PEDICARE_REVIEW',__('https://wordpress.org/support/theme/pedicare/reviews/#new-post','pedicare-child-health-clinic'));
define('PEDICARE_FREE_CALL',__('https://calendly.com/aleksandrchumak/30min','pedicare-child-health-clinic'));

// Enqueue Styles
require_once get_template_directory() . '/inc/theme-enqueue.php';

// Theme info Page
require_once get_template_directory() . '/inc/theme-info.php';

// Registers a new pattern categories
require_once get_template_directory() . '/inc/patterns.php';

// register block styles
require_once get_template_directory() . '/inc/block_styles.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';
