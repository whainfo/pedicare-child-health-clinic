<?php
function PediCare_Child_Health_Clinic_post_type() {

    if(!post_type_exists('service')) {
        $args = array(
            'label' => __('Services', 'PediCare-Child-Health-Clinic'),
            'description' => __('', 'PediCare-Child-Health-Clinic'),
            'labels' => array(
                'name' => _x('Services', 'Post Type General Name', 'PediCare-Child-Health-Clinic'),
                'singular_name' => _x('Service', 'Post Type Singular Name', 'PediCare-Child-Health-Clinic'),
                'menu_name' => __('Services', 'PediCare-Child-Health-Clinic'),
                'parent_item_colon' => __('Parent Service', 'PediCare-Child-Health-Clinic'),
                'all_items' => __('All Services', 'PediCare-Child-Health-Clinic'),
                'view_item' => __('View Service', 'PediCare-Child-Health-Clinic'),
                'add_new_item' => __('Add New Service', 'PediCare-Child-Health-Clinic'),
                'add_new' => __('Add New', 'PediCare-Child-Health-Clinic'),
                'edit_item' => __('Edit Service', 'PediCare-Child-Health-Clinic'),
                'update_item' => __('Update Service', 'PediCare-Child-Health-Clinic'),
                'search_items' => __('Search Service', 'PediCare-Child-Health-Clinic'),
                'not_found' => __('Not Found', 'PediCare-Child-Health-Clinic'),
                'not_found_in_trash' => __('Not found in Trash', 'PediCare-Child-Health-Clinic'),
            ),
            'supports' => array('title', 'editor'),
            'taxonomies' => array(),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => false,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-id',
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'rewrite' => array('slug' => 'service'),
            'publicly_queryable' => true,
            'capability_type' => 'post',
            'show_in_rest' => true,

        );

        register_post_type('service', $args);

    }
    if(!post_type_exists('doctor')) {
        $args = array(
            'label' => __('Doctors', 'PediCare-Child-Health-Clinic'),
            'description' => __('', 'PediCare-Child-Health-Clinic'),
            'labels' => array(
                'name' => _x('Doctors', 'Post Type General Name', 'PediCare-Child-Health-Clinic'),
                'singular_name' => _x('Doctor', 'Post Type Singular Name', 'PediCare-Child-Health-Clinic'),
                'menu_name' => __('Doctors', 'PediCare-Child-Health-Clinic'),
                'parent_item_colon' => __('Parent Doctor', 'PediCare-Child-Health-Clinic'),
                'all_items' => __('All Doctors', 'PediCare-Child-Health-Clinic'),
                'view_item' => __('View Doctor', 'PediCare-Child-Health-Clinic'),
                'add_new_item' => __('Add New Doctor', 'PediCare-Child-Health-Clinic'),
                'add_new' => __('Add New', 'PediCare-Child-Health-Clinic'),
                'edit_item' => __('Edit Doctor', 'PediCare-Child-Health-Clinic'),
                'update_item' => __('Update Doctor', 'PediCare-Child-Health-Clinic'),
                'search_items' => __('Search Doctor', 'PediCare-Child-Health-Clinic'),
                'not_found' => __('Not Found', 'PediCare-Child-Health-Clinic'),
                'not_found_in_trash' => __('Not found in Trash', 'PediCare-Child-Health-Clinic'),
            ),
            'supports' => array('title', 'editor'),
            'taxonomies' => array(),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => false,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-businessman',
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'rewrite' => array('slug' => 'doctor'),
            'publicly_queryable' => true,
            'capability_type' => 'post',
            'show_in_rest' => true,

        );

        register_post_type('doctor', $args);

    }
}

add_action( 'init', 'PediCare_Child_Health_Clinic_post_type', 10 );