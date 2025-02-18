<?php
add_action('admin_menu', 'PediCare_Child_Health_Clinic_getting_started');
function PediCare_Child_Health_Clinic_getting_started()
{
    add_theme_page(esc_html__('Get Started', 'PediCare-Child-Health-Clinic'), esc_html__('Get Started', 'PediCare-Child-Health-Clinic'), 'edit_theme_options', 'PediCare-Child-Health-Clinic-guide-page', 'PediCare_Child_Health_Clinic_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function PediCare_Child_Health_Clinic_admin_theme_style()
{
    wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}

add_action('admin_enqueue_scripts', 'PediCare_Child_Health_Clinic_admin_theme_style');

//guidline for about theme
function PediCare_Child_Health_Clinic_test_guide()
{
    //custom function about theme customizer
    $return = add_query_arg(array());
    $theme = wp_get_theme('PediCare-Child-Health-Clinic');
    $screenshot_url = $theme->get_screenshot();
    ?>
    <div class="wrapper-info">
        <div class="intro">
            <h3><?php esc_html_e('Welcome to PediCare Child Health Clinic WordPress Theme', 'PediCare-Child-Health-Clinic'); ?></h3>
            <p>Version: <?php echo esc_html($theme['Version']); ?></p>
        </div>
        <div class="theme-desc">
            <p><?php esc_html_e('PediCare Child Health Clinic is a WordPress theme designed for travel agencies and more. It uses advanced block technology to let you effortlessly create and customize your website. Achieve Google PageSpeed’s green zone for lightning-fast performance while showcasing your destinations, services, and stories with style.
', 'PediCare-Child-Health-Clinic'); ?></p>
        </div>
        <div class="col-left">
            <div class="started">
                <hr>
                <div class="centerbold">
                    <h4><?php esc_html_e('Check Our Demo', 'PediCare-Child-Health-Clinic'); ?></h4>
                    <p><?php esc_html_e('Here, you can view a live demonstration of our theme.', 'PediCare-Child-Health-Clinic'); ?></p>
                    <a class="bg-color" href="<?php echo esc_url(PEDICARE_DEMO); ?>"
                       target="_blank"><?php esc_html_e('Theme Demo', 'PediCare-Child-Health-Clinic'); ?></a>
                    <hr>
                    <h4><?php esc_html_e('FAQ', 'PediCare-Child-Health-Clinic'); ?></h4>
                    <p><?php esc_html_e('Need more details? Please try to find an answer or ask your question.', 'PediCare-Child-Health-Clinic'); ?></p>
                    <a class="bg-color" class="bg-color" href="<?php echo esc_url(PEDICARE_FAQ); ?>"
                       target="_blank"><?php esc_html_e('Documentation', 'PediCare-Child-Health-Clinic'); ?></a>
                    <hr>
                    <h4><?php esc_html_e('Need Help?', 'PediCare-Child-Health-Clinic'); ?></h4>
                    <p><?php esc_html_e('Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'PediCare-Child-Health-Clinic'); ?></p>
                    <a class="bg-color" href="<?php echo esc_url(PEDICARE_SUPPORT); ?>"
                       target="_blank"><?php esc_html_e('Support', 'PediCare-Child-Health-Clinic'); ?></a>
                    <hr>
                    <h4><?php esc_html_e('Leave us a review', 'PediCare-Child-Health-Clinic'); ?></h4>
                    <p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'PediCare-Child-Health-Clinic'); ?></p>
                    <a class="bg-color" href="<?php echo esc_url(PEDICARE_REVIEW); ?>"
                       target="_blank"><?php esc_html_e('Review', 'PediCare-Child-Health-Clinic'); ?></a>
                    <hr>
                    <h4><?php esc_html_e('Contact Developers', 'PediCare-Child-Health-Clinic'); ?></h4>
                    <p><?php esc_html_e('If you are looking for development support, feel free to schedule a free call.', 'PediCare-Child-Health-Clinic'); ?></p>
                    <a href="<?php echo esc_url(PEDICARE_FREE_CALL); ?>"
                       target="_blank"><?php esc_html_e('Schedule a free call', 'PediCare-Child-Health-Clinic'); ?></a>
                </div>
            </div>
        </div>
        <div class="col-right">
            <div class="col-left-inner">
                <img role="img"
                     src="<?php echo esc_url($screenshot_url); ?>"
                     alt=""/>
            </div>
        </div>
    </div>
<?php } ?>
