<?php
// Custom category for patterns
// https://developer.wordpress.org/reference/functions/register_block_pattern_category/

add_action('init', function () {
    register_block_pattern_category(
        'pedicare-child-health-clinic',
        array( 'label' => __( 'PediCare Child Health Clinic', 'pedicare-child-health-clinic' ) )
    );
},99);

