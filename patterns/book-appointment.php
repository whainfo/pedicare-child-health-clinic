<?php
/**
 * Title: Book appointment
 * Slug: pedicare-child-health-clinic/book-appointment
 * Categories: pedicare-child-health-clinic, featured
 * Viewport Width: 1360
 */
?>
<!-- wp:group {"className":"main-frontpage pedicare-child-health-clinic-book-appointment","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1360px"}} -->
<div class="wp-block-group main-frontpage pedicare-child-health-clinic-book-appointment" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:image {"id":30,"className":"wp-block-image size-large"} -->
            <figure class="wp-block-image size-large">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/images/book-appointment.png" alt="" class="wp-image-30"/></figure>
            <!-- /wp:image --></div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600"}},"fontSize":"l"} -->
            <h3 class="wp-block-heading has-text-align-center has-l-font-size" style="font-style:normal;font-weight:600;text-transform:none">Book your appointment now</h3>
            <!-- /wp:heading -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"vertical"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"footer-bottom","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|footer-bottom"}}}},"fontSize":"xl"} -->
                <div class="wp-block-button has-custom-font-size has-xl-font-size" style="font-style:normal;font-weight:700">
                    <a class="wp-block-button__link has-footer-bottom-color has-text-color has-link-color wp-element-button">
                        <strong><img class="wp-image-16" style="width: 33px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/src/images/phone-green.svg" alt=""> <?php echo esc_html__('1646464654646', 'pedicare-child-health-clinic'); ?></strong></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"textAlign":"center","backgroundColor":"accent-color","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"l"} -->
                <div class="wp-block-button has-custom-font-size has-l-font-size" style="font-style:normal;font-weight:700">
                    <a class="wp-block-button__link has-foreground-color has-accent-color-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button">
                        <strong><?php echo esc_html__('REQUEST ONLINE', 'pedicare-child-health-clinic'); ?></strong>
                    </a></div>
                <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns --></div>
<!-- /wp:group -->