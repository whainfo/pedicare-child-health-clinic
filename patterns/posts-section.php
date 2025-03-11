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
<div id="offshoot" class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"40px"},"padding":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-bottom:40px;padding-top:0;padding-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"656px"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"42px"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"blue-dark"} -->
                <h2 class="wp-block-heading has-text-align-center has-blue-dark-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50);font-size:42px">Offshoot</h2>
                <!-- /wp:heading --></div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":31,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
                <!-- wp:post-featured-image {"isLink":true,"height":"","scale":"contain","style":{"border":{"radius":"28px"}}} /-->

                <!-- wp:post-date {"format":"F j, Y"} /-->
                <!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"l"} /-->

                <!-- wp:read-more {"content":"\u003cstrong\u003eRead more \u003e\u003c/strong\u003e","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-color"}}}},"textColor":"accent-color","fontSize":"m"} /-->
                <!-- /wp:post-template --></div>
            <!-- /wp:query -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:button {"backgroundColor":"accent-color","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"l"} -->
                <div class="wp-block-button has-custom-font-size has-l-font-size"><a class="wp-block-button__link has-foreground-color has-accent-color-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read more posts &gt;</a></div>
                <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
        <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
<!-- /wp:group -->