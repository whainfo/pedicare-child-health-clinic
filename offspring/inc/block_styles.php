<?php
if ( function_exists( 'register_block_style' ) ) {
    register_block_style(
        'core/post-date',
        array(
            'name'         => 'offspring-post-date-icon',
            'label'        => __( 'Post Date Icon', 'offspring' ),
            'is_default'   => true,
            'inline_style' => ".wp-block-post-date:before {margin-right: 5px; content: ''; display: inline-block; width: 12px; height: 12px; background-repeat: no-repeat; background-size: cover; margin-top: 1px; float: left; background-image: url(\"data:image/svg+xml,%3Csvg width='12px' height='12px' viewBox='0 0 48 48' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3Cstyle%3E.c%7Bfill:none;stroke:%23000000;stroke-linecap:round;stroke-linejoin:round;%7D%3C/style%3E%3C/defs%3E%3Cg id='a'%3E%3Cg%3E%3Cline class='c' x1='21.25' y1='20.925' x2='24.75' y2='19'/%3E%3Cline class='c' x1='24.75' y1='19' x2='24.75' y2='33'/%3E%3C/g%3E%3C/g%3E%3Cg id='b'%3E%3Cpath class='c' d='m8.0988,7.8588c-1.0601,0-1.9194.8593-1.9194,1.9194v31.8025c0,1.06.8593,1.9193,1.9193,1.9193h31.8025c1.06,0,1.9193-.8592,1.9194-1.9192h0V9.7782c0-1.0601-.8593-1.9194-1.9194-1.9194H8.0988Z'/%3E%3Cline class='c' x1='12.8166' y1='10.258' x2='12.8166' y2='4.5'/%3E%3Cline class='c' x1='35.1834' y1='10.258' x2='35.1834' y2='4.5'/%3E%3C/g%3E%3C/svg%3E\");}",
        )
    );

    register_block_style(
        'core/post-author-name',
        array(
            'name'         => 'offspring-post-author-name-icon',
            'label'        => __( 'Post Aurhor Name Icon', 'offspring' ),
            'is_default'   => true,
            'inline_style' => ".wp-block-post-author-name:before {margin-right: 5px; content: ''; display: inline-block; width: 12px; height: 12px; background-repeat: no-repeat; background-size: cover; margin-top: 1px; float: left; background-image: url(\"data:image/svg+xml,%0A%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3E%3Cpath fill='%23a3a3a3' d='M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z'/%3E%3C/svg%3E\");}",
        )
    );

    register_block_style(
        'core/post-featured-image',
        array(
            'name'         => 'offspring-post-featured-image',
            'label'        => __( 'Post Featured Image', 'offspring' ),
            'is_default'   => true,
            'inline_style' => ".wp-block-post .wp-block-post-featured-image {margin-bottom: 20px;} .wp-block-post .wp-block-post-featured-image img {border-radius: 5px;}",
        )
    );

    register_block_style(
        'core/post-title',
        array(
            'name'         => 'offspring-post-title',
            'label'        => __( 'Post Title', 'offspring' ),
            'is_default'   => true,
            'inline_style' => ".wp-block-post .wp-block-post-title {margin: 20px 0;} .wp-block-post .wp-block-post-title a {text-decoration: none;}",
        )
    );

    register_block_style(
        'core/post-excerpt',
        array(
            'name'         => 'offspring-post-excerpt',
            'label'        => __( 'Post Excerpt', 'offspring' ),
            'is_default'   => true,
            'inline_style' => ".wp-block-post-excerpt__more-link, .wp-block-read-more { display: block; transition-duration: 0.1s; text-transform: capitalize; text-decoration: none; } .wp-block-post-excerpt__more-link:hover, .wp-block-read-more:hover { color: var(--wp--preset--color--primary); } .wp-block-post-excerpt__more-link:hover:after, .wp-block-read-more:hover:after { filter: invert(80%) sepia(89%) saturate(889%) hue-rotate(317deg) brightness(102%) contrast(101%); } .wp-block-post-excerpt__more-link:after, .wp-block-read-more:after { content: ''; display: inline-block; vertical-align: middle; margin-bottom: 2px; margin-left: 5px; height: 1em; width: 1em; transition-duration: 0.1s; background-image: url(\"data:image/svg+xml,%3Csvg%20height%3D%221em%22%20width%3D%221em%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2025%2025%22%3E%3Ctitle%3EArtboard-34%3C%2Ftitle%3E%3Cg%20id%3D%22Right-2%22%20data-name%3D%22Right%22%3E%3Cpolygon%20points%3D%2217.5%205.999%2016.793%206.706%2022.086%2011.999%201%2011.999%201%2012.999%2022.086%2012.999%2016.792%2018.294%2017.499%2019.001%2024%2012.499%2017.5%205.999%22%3E%3C%2Fpolygon%3E%3C%2Fg%3E%3C%2Fsvg%3E\"); } .wp-block-post-excerpt__more-link { margin-top: 15px; } .wp-block-post-excerpt__excerpt { color: #515151; }",
        )
    );

    register_block_style(
        'core/search',
        array(
            'name'         => 'offspring-search',
            'label'        => __( 'Search', 'offspring' ),
            'is_default'   => true,
            'inline_style' => ".wp-block-search .wp-block-search__input {margin-top: 0 !important;}",
        )
    );

    register_block_style(
        'core/post-comments',
        array(
            'name'         => 'offspring-post-comments',
            'label'        => __( 'Post Comments', 'offspring' ),
            'is_default'   => true,
            'inline_style' => ".wp-block-post-comments { box-sizing: border-box; } .wp-block-post-comments .comment-form input:not([type=submit]):not([type=checkbox]):not([type=hidden]), .wp-block-post-comments .comment-form textarea { box-sizing: border-box; display: block; width: 100%; } .wp-block-post-comments input:not([type=submit]):not([type=checkbox]), .wp-block-post-comments textarea { padding: calc(0.667em + 2px); } .wp-block-post-comments input:not([type=submit]), .wp-block-post-comments textarea { border: 1px solid #949494; font-family: inherit; font-size: 1em; }",
        )
    );

    register_block_style(
        'contact-form-7-contact-form-selector',
        array(
            'name'         => 'offspring-contact-form-7-contact-form-selector',
            'label'        => __( 'Contact Form 7', 'offspring' ),
            'is_default'   => true,
            'inline_style' => ".wpcf7-form label, #commentform label, .wp-block-search label { font-size: 14px; text-transform: capitalize; } .wpcf7-form .wpcf7-text, #commentform .wpcf7-text, .wp-block-search .wpcf7-text, .wpcf7-form .wpcf7-textarea, #commentform .wpcf7-textarea, .wp-block-search .wpcf7-textarea, .wpcf7-form .wpcf7-submit, #commentform .wpcf7-submit, .wp-block-search .wpcf7-submit, .wpcf7-form #comment, #commentform #comment, .wp-block-search #comment, .wpcf7-form #author, #commentform #author, .wp-block-search #author, .wpcf7-form #email, #commentform #email, .wp-block-search #email, .wpcf7-form #url, #commentform #url, .wp-block-search #url, .wpcf7-form .wp-block-search__input, #commentform .wp-block-search__input, .wp-block-search .wp-block-search__input { background-color: var(--wp--preset--color--white); border: 1px solid #d9d9d9; height: 42px; resize: none; padding: 0 10px; margin-top: 5px; border-radius: 35px 35px 35px 35px; } .wpcf7-form .wpcf7-textarea, #commentform .wpcf7-textarea, .wp-block-search .wpcf7-textarea, .wpcf7-form #comment, #commentform #comment, .wp-block-search #comment { resize: none; min-height: 200px; overflow: auto; padding: 10px; width: 100%; } .wpcf7-form .wpcf7-submit, #commentform .wpcf7-submit, .wp-block-search .wpcf7-submit, .wpcf7-form #submit, #commentform #submit, .wp-block-search #submit, .wpcf7-form .wp-block-search__button, #commentform .wp-block-search__button, .wp-block-search .wp-block-search__button { background-color: var(--wp--preset--color--primary); border-width: 0; font-size: inherit; line-height: inherit; text-decoration: none; box-sizing: border-box; cursor: pointer; text-align: center; word-break: break-word; border-radius: 40px; border-color: currentColor; color: var(--wp--preset--color--dark); font-family: var(--wp--preset--font-family--poppins); font-weight: 400; padding: 0 30px; display: flex; align-items: center; } .wpcf7-form #submit, #commentform #submit, .wp-block-search #submit { padding: 10px 30px; }",
        )
    );
}