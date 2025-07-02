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
        <div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:40%"><!-- wp:group {"className":"wha-signle-doc-sidebar","style":{"color":{"background":"#d1f0f1"},"border":{"radius":"53px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group wha-signle-doc-sidebar has-background" style="border-radius:53px;background-color:#d1f0f1">

                <!-- wp:image {"id":80,"sizeSlug":"full","linkDestination":"none","align":"center","className":"pedicare-child-health-clinic-doctor"} -->
                <figure class="wp-block-image aligncenter size-full pedicare-child-health-clinic-doctor is-style-rounded">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/images/our-team/img-doc-1.png" alt="doctor" class="wp-image-80"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--60)"><strong><?php echo esc_html__('clinical interests', 'pedicare-child-health-clinic'); ?></strong></h4>
                <!-- /wp:heading -->

                <!-- wp:list {"ordered":true,"className":"pedicare-child-health-clinic-list"} -->
                <ol class="wp-block-list pedicare-child-health-clinic-list"><!-- wp:list-item -->
                    <li><?php echo esc_html__('Eosinophilic Oesophagitis', 'pedicare-child-health-clinic'); ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><?php echo esc_html__('Food Intolerances and Allergies', 'pedicare-child-health-clinic'); ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><?php echo esc_html__('Pancreatic Disorders in Children', 'pedicare-child-health-clinic'); ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><?php echo esc_html__('Short Bowel Syndrome', 'pedicare-child-health-clinic'); ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><?php echo esc_html__('Constipation and Motility Disorders', 'pedicare-child-health-clinic'); ?></li>
                    <!-- /wp:list-item --></ol>
                <!-- /wp:list -->

                <!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap","orientation":"vertical"}} -->
                <div class="wp-block-buttons alignwide"><!-- wp:button {"backgroundColor":"title-highlight","textColor":"foreground","width":100,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"l"} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-l-font-size" style="text-transform:uppercase"><a href="#" class="wp-block-button__link has-foreground-color has-title-highlight-background-color has-text-color has-background has-link-color wp-element-button"><strong><?php echo esc_html__('book an appointment', 'pedicare-child-health-clinic'); ?></strong> &gt;</a></div>
                    <!-- /wp:button --></div>
                <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|title-highlight"}}},"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600"}},"textColor":"title-highlight","fontSize":"xxl"} -->
            <h2 class="wp-block-heading has-title-highlight-color has-text-color has-link-color has-xxl-font-size" style="font-style:normal;font-weight:600;text-transform:none"><?php echo esc_html__('Dr John Doe', 'pedicare-child-health-clinic'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|blue-dark"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"blue-dark","fontSize":"l"} -->
            <p class="has-blue-dark-color has-text-color has-link-color has-l-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html__('MBBS BSc FRACP', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__("Dr. John Doe is a highly trained paediatric gastroenterologist with a consultant appointment at the Children's Hospital in Sydney. He graduated from the University of Adelaide in 2004 and completed his paediatric training, including advanced specialisation in gastroenterology, across leading tertiary hospitals in Australia and New Zealand.", 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__('Dr. Doe was conferred as a Fellow of the Royal Australasian College of Physicians in 2012 before undertaking a two-year liver and intestinal transplant fellowship in Canada. His passion for child health has also led him to engage in medical fieldwork in South America, Southeast Asia, and remote Indigenous communities in Australia.', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__('His dedication to research has earned him several prestigious accolades, including the National Health Medical Research Council Scholarship, the Paediatric Research Award (American Association for the Study of Liver Disease), and the Rising Star Award (International Liver Transplant Society).', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__("Dr. Doe is currently investigating immune mechanisms of liver disease at the Children's Hospital in Brisbane in collaboration with leading research institutes. He has recently begun consulting as a paediatric gastroenterologist at Bright Futures Child Health Specialists, with additional appointments at the Children's Hospital and a private practice in Perth.", 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__('He offers flexible new and review appointments with short wait times and welcomes patient referrals. Outside of work, Dr. Doe enjoys spending time with his two young children and exploring the outdoors with his family.', 'pedicare-child-health-clinic'); ?></p>
            <!-- /wp:paragraph --></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns --></div>
<!-- /wp:group -->
