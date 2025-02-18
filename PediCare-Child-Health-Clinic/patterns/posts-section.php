<?php
/**
 * Title: Posts Section
 * Slug: PediCare-Child-Health-Clinic/posts-section
 * Categories: PediCare-Child-Health-Clinic, featured, posts
 * Block Types: core/template-part/posts
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|50","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-bottom:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"656px"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"blue-light","className":"has-subtitle-color","fontSize":"regular"} -->
                <h3 class="wp-block-heading has-text-align-center has-subtitle-color has-blue-light-color has-text-color has-regular-font-size" style="margin-bottom:var(--wp--preset--spacing--50)"><?php echo esc_html__('From Blog Post', 'PediCare-Child-Health-Clinic'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"42px"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"blue-dark"} -->
                <h2 class="wp-block-heading has-text-align-center has-blue-dark-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50);font-size:42px"><?php echo esc_html__('News and Articles', 'PediCare-Child-Health-Clinic'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","className":"is-style-default"} -->
                <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default" style="margin-bottom:var(--wp--preset--spacing--50)"/>
                <!-- /wp:separator -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"bottom":"var:preset|spacing|50"}}}} -->
                <p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('Doloribus fames facilisis nullam? Nisi veniam anim quia, mauris eiusmod ullamco at morbi eius purus ac provident ante, habitant commodi, nihil dignissimos.', 'PediCare-Child-Health-Clinic'); ?></p>
                <!-- /wp:paragraph --></div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":31,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"default"}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:post-featured-image {"isLink":true,"height":"","scale":"contain"} /-->

                <!-- wp:post-terms {"term":"category","textColor":"blue-light","fontSize":"small"} /-->

                <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px"}}} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|50"}},"textColor":"grey","className":"post-details","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"fontSize":"small"} -->
                <div class="wp-block-group post-details has-grey-color has-text-color has-small-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-date {"format":"F j, Y","isLink":true} /-->

                    <!-- wp:post-author-name {"isLink":true} /--></div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"moreText":"Learn More","showMoreOnNewLine":false,"style":{"typography":{"fontSize":"14px"}},"textColor":"background"} /-->
                <!-- /wp:post-template --></div>
            <!-- /wp:query --></div>
        <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
<!-- /wp:group -->
