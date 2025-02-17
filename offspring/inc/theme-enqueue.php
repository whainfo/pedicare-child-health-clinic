<?php
if ( ! function_exists( 'offspring_styles' ) ) :
    function offspring_styles() {
        // Register theme stylesheet.
        wp_enqueue_style('offspring-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
        wp_enqueue_style( 'offspring-main-styles', get_stylesheet_directory_uri() . "/dist/css/main.css",array(), wp_get_theme()->get('version') );
    }
endif;
add_action( 'wp_enqueue_scripts', 'offspring_styles' );

// Apply Front end styles to the admin area.
function enqueue_admin_editor_style() {
    wp_enqueue_style( 'offspring-main-styles', get_stylesheet_directory_uri() . "/dist/css/main.css",array(), wp_get_theme()->get('version') );
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin_editor_style' );
