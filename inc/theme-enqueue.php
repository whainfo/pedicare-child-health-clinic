<?php
if ( ! function_exists( 'PediCare_Child_Health_Clinic_styles' ) ) :
    function PediCare_Child_Health_Clinic_styles() {
        // Register theme stylesheet.
        wp_enqueue_style('pedicare-child-health-clinic-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
        wp_enqueue_style( 'pedicare-child-health-clinic-main-styles', get_stylesheet_directory_uri() . "/dist/css/main.css",array(), wp_get_theme()->get('version') );
    }
endif;
add_action( 'wp_enqueue_scripts', 'PediCare_Child_Health_Clinic_styles' );

// Apply Front end styles to the admin area.
function enqueue_admin_editor_style() {
    wp_enqueue_style( 'pedicare-child-health-clinic-main-styles', get_stylesheet_directory_uri() . "/dist/css/main.css",array(), wp_get_theme()->get('version') );
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin_editor_style' );
