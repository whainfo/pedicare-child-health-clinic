<?php
/**
 * Offspring functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Offspring
 * @since 1.0
 */


if (! function_exists('offspring_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function offspring_support() {

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
            wp_safe_redirect( admin_url("themes.php?page=offspring-guide-page") );
        }
	}
endif;
add_action( 'after_setup_theme', 'offspring_support' );


/* Theme Credit link */
define('JOURNY_FAQ',__('https://offspring.webhelpagency.com/documentation/','offspring'));
define('JOURNY_DEMO',__('https://offspring.webhelpagency.com/','offspring'));
define('JOURNY_SUPPORT',__('https://wordpress.org/support/theme/offspring/','offspring'));
define('JOURNY_REVIEW',__('https://wordpress.org/support/theme/offspring/reviews/#new-post','offspring'));
define('JOURNY_FREE_CALL',__('https://calendly.com/aleksandrchumak/30min','offspring'));

// Enqueue Styles
require_once get_template_directory() . '/inc/theme-enqueue.php';

// Theme info Page
require_once get_template_directory() . '/inc/theme-info.php';

// Registers a new pattern categories
require_once get_template_directory() . '/inc/patterns.php';

// tgm plugin for recommended plugins
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

// Plugin installation and activation for WordPress themes.
require_once get_template_directory() . '/inc/tgmpa_register.php';

// register block styles
require_once get_template_directory() . '/inc/block_styles.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';
