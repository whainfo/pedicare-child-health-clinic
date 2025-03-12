<?php
/**
 * Title: 404
 * Slug: PediCare-Child-Health-Clinic/hidden-404
 * Categories: PediCare-Child-Health-Clinic, featured
 * Keywords: 404
 * Inserter: false
 */
?>
<!-- wp:group {"className":"vh-100 ","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1170px","wideSize":"1200px"}} -->
<div class="wp-block-group vh-100" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--70)">
    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"200px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|accent-color"}}}},"textColor":"accent-color"} -->
    <h1 class="wp-block-heading has-text-align-center has-accent-color-color has-text-color has-link-color" style="font-size:200px;font-style:normal;font-weight:500">
        <?php echo esc_html__('404', 'PediCare-Child-Health-Clinic'); ?>
    </h1>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__('Page not found.', 'PediCare-Child-Health-Clinic'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php echo esc_html__('Sorry. It looks like nothing was found at this location.', 'PediCare-Child-Health-Clinic'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"accent-color","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
        <div class="wp-block-button">
            <a class="wp-block-button__link has-foreground-color has-accent-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:0px">
                <?php echo esc_html__('Return Home', 'PediCare-Child-Health-Clinic'); ?>
            </a></div>
        <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
<!-- /wp:group -->