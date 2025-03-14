<?php
/**
 * Title: Single Doctor content
 * Slug: pedicare-child-health-clinic/single-doctor-content
 * Categories: pedicare-child-health-clinic, featured
 * Block Types: core/template-part/section
 * Viewport Width: 1360
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"1360px"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:40%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"color":{"background":"#d1f0f1"},"border":{"radius":"53px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background" style="border-radius:53px;background-color:#d1f0f1;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

                <!-- wp:image {"id":80,"sizeSlug":"full","linkDestination":"none","align":"center","className":"pedicare-child-health-clinic-doctor"} -->
                <figure class="wp-block-image aligncenter size-full pedicare-child-health-clinic-doctor">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/images/our-team/img-doc-1.png" alt="" class="wp-image-80"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--60)"><strong><?php echo esc_html__('clinical interests', 'pedicare-child-health-clinic'); ?></strong></h4>
                <!-- /wp:heading -->

                <!-- wp:list {"ordered":true,"className":"pedicare-child-health-clinic-list"} -->
                <ol class="wp-block-list pedicare-child-health-clinic-list"><!-- wp:list-item -->
                    <li>Coeliac disease</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Inflammatory Bowel Disease</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Acute &amp; Chronic Liver Disease</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Chronic Abdominal Pain</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Constipation</li>
                    <!-- /wp:list-item --></ol>
                <!-- /wp:list -->

                <!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap","orientation":"vertical"}} -->
                <div class="wp-block-buttons alignwide"><!-- wp:button {"backgroundColor":"title-highlight","textColor":"foreground","width":100,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"l"} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-l-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-title-highlight-background-color has-text-color has-background has-link-color wp-element-button"><strong><?php echo esc_html__('book an appointment', 'pedicare-child-health-clinic'); ?></strong> &gt;</a></div>
                    <!-- /wp:button --></div>
                <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|title-highlight"}}},"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600"}},"textColor":"title-highlight","fontSize":"xxl"} -->
            <h2 class="wp-block-heading has-title-highlight-color has-text-color has-link-color has-xxl-font-size" style="font-style:normal;font-weight:600;text-transform:none"><?php echo esc_html__('Dr Jeremy Rajanayagam', 'pedicare-child-health-clinic'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|blue-dark"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"blue-dark","fontSize":"l"} -->
            <p class="has-blue-dark-color has-text-color has-link-color has-l-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html__('Dr Jeremy Rajanayagam', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|blue-dark"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"blue-dark","fontSize":"l"} -->
            <p class="has-blue-dark-color has-text-color has-link-color has-l-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html__('MBBS BSc FRACP', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__('Dr. Jeremy Rajanayagam is an Australian trained paediatric Gastroenterologist with a consultant appointment at the Royal Children’s Hospital, Melbourne. He graduated from the University of Queensland in 2006, following which he completed his paediatric training, including advanced training in Gastroenterology in leading tertiary hospitals around Australia and New Zealand.', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__('Jeremy was conferred Fellow of the Royal Australasian College of Physicians in 2013, after which he embarked on a 2-year liver and intestinal transplant fellowship in the United Kingdom. Jeremy’s interests in child health has also lead him to pursue medical fieldwork in East Africa, India, Egypt and the Torres Strait.', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__('His desire to contribute to his profession has seen his involvement as an active researcher for which he has received a number of prestigious awards including, the National Health Medical Research Council Scholarship, Paediatric Research Award (American Association for the Study of Liver Disease) and Rising Star Award (International Liver Transplant Society).', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__('Jeremy is currently investigating the immune mechanisms of liver disease at the Royal Children’s Hospital, in collaboration with Peter Doherty Institute for Infection and Immunology and the University of Melbourne. Jeremy has recently started consulting as a Paediatric Gastroenterologists at Offspring Child Health Specialists with additional appointments at the Royal Children’s Hospital and Epworth.', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__('He is able to provide flexible new and review appointments with short wait times. He is also happy to be discuss patient referrals. When Jeremy is not working he enjoys being a father to two young children and chasing his kids at the park.', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph --></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns --></div>
<!-- /wp:group -->
