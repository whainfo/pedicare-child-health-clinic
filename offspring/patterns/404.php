<?php
/**
 * Title: 404
 * Slug: offspring/hidden-404
 * Categories: offspring, featured
 * Keywords: 404
 * Inserter: false
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"className":"vh-100 offspring-404","layout":{"type":"constrained","contentSize":"1170px","wideSize":"1200px"}} -->
<div class="wp-block-group vh-100 offspring-404" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":1} -->
    <h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( '404', 'offspring'); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Oops! that page can’t be found.', 'offspring'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'offspring'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group"><!-- wp:search {"label":"","placeholder":"<?php esc_html_e( 'Search...', 'offspring'); ?>","buttonText":"<?php esc_html_e( 'Search', 'offspring'); ?>"} /--></div>
    <!-- /wp:group --></div>
<!-- /wp:group -->