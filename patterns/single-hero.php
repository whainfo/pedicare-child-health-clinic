<?php
/**
 * Title: Single Hero
 * Slug: pedicare-child-health-clinic/single-hero
 * Categories: pedicare-child-health-clinic, featured
 * Block Types: core/template-part/section
 * Viewport Width: 1360
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri());?>/src/images/pedicare.jpg","id":20,"dimRatio":20,"overlayColor":"secondary","minHeight":460,"isDark":false,"className":"hdrbanner-BX pedicare-child-health-clinic-gap-0","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"1360px"}} -->
<div class="wp-block-cover is-light hdrbanner-BX pedicare-child-health-clinic-gap-0" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:460px">
    <span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-20 has-background-dim"></span>
    <img class="wp-block-cover__image-background wp-image-20" alt="" src="<?php echo esc_url(get_template_directory_uri());?>/src/images/pedicare.jpg" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} /-->

                <!-- wp:paragraph -->
                <p><?php echo esc_html__('Let our family care for yours', 'pedicare-child-health-clinic'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent-color","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"l"} -->
                    <div class="wp-block-button has-custom-font-size has-l-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-accent-color-background-color has-text-color has-background has-link-color wp-element-button"><strong><?php echo esc_html__('Enquire now >', 'pedicare-child-health-clinic'); ?></strong></a></div>
                    <!-- /wp:button --></div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column --></div>
        <!-- /wp:columns -->
    </div>
</div>
<!-- /wp:cover -->