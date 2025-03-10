<?php
/**
 * Title: Single Clinic content
 * Slug: PediCare-Child-Health-Clinic/single-clinic-content
 * Categories: PediCare-Child-Health-Clinic, featured
 * Block Types: core/template-part/section
 * Viewport Width: 1360
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
    <!-- wp:image {"id":95,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
    <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url(get_template_directory_uri());?>/src/images/icons/clinics/icon3.png" alt="" class="wp-image-95"/></figure>
    <!-- /wp:image -->

    <!-- wp:post-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|blue-dark"}}}},"textColor":"blue-dark"} /-->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"accent-color","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"xl"} -->
        <div class="wp-block-button has-custom-font-size has-xl-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">
            <a class="wp-block-button__link has-foreground-color has-accent-color-background-color has-text-color has-background has-link-color wp-element-button"><strong>Book an appointment</strong> ></a></div>
        <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
<!-- /wp:group -->