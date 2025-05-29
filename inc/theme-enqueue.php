<?php
if ( ! function_exists( 'pedicare_child_health_clinic_styles' ) ) :
    function pedicare_child_health_clinic_styles() {
        // Register theme stylesheet.
        wp_enqueue_style('pedicare-child-health-clinic-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
        wp_enqueue_style( 'pedicare-child-health-clinic-main-styles', get_stylesheet_directory_uri() . "/dist/css/main.css",array(), wp_get_theme()->get('version') );
    }
endif;
add_action( 'wp_enqueue_scripts', 'pedicare_child_health_clinic_styles' );
add_action( 'admin_enqueue_scripts', 'pedicare_child_health_clinic_styles' );
add_action( 'enqueue_block_assets', 'pedicare_child_health_clinic_styles' );

// Apply Front end styles to the admin area.
function enqueue_admin_editor_style() {
    wp_enqueue_style( 'pedicare-child-health-clinic-main-styles', get_stylesheet_directory_uri() . "/dist/css/main.css",array(), wp_get_theme()->get('version') );
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin_editor_style' );
