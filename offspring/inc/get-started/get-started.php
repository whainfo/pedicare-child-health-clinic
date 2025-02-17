<?php
add_action('admin_menu', 'offspring_getting_started');
function offspring_getting_started()
{
    add_theme_page(esc_html__('Get Started', 'offspring'), esc_html__('Get Started', 'offspring'), 'edit_theme_options', 'offspring-guide-page', 'offspring_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function offspring_admin_theme_style()
{
    wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}

add_action('admin_enqueue_scripts', 'offspring_admin_theme_style');

//guidline for about theme
function offspring_test_guide()
{
    //custom function about theme customizer
    $return = add_query_arg(array());
    $theme = wp_get_theme('offspring');
    $screenshot_url = $theme->get_screenshot();
    ?>
    <div class="wrapper-info">
        <div class="intro">
            <h3><?php esc_html_e('Welcome to Offspring
 WordPress Theme', 'offspring'); ?></h3>
            <p>Version: <?php echo esc_html($theme['Version']); ?></p>
        </div>
        <div class="theme-desc">
            <p><?php esc_html_e('Offspring is a WordPress theme designed for travel agencies and more. It uses advanced block technology to let you effortlessly create and customize your website. Achieve Google PageSpeed’s green zone for lightning-fast performance while showcasing your destinations, services, and stories with style.
', 'offspring'); ?></p>
        </div>
        <div class="col-left">
            <div class="started">
                <hr>
                <div class="centerbold">
                    <h4><?php esc_html_e('Check Our Demo', 'offspring'); ?></h4>
                    <p><?php esc_html_e('Here, you can view a live demonstration of our theme.', 'offspring'); ?></p>
                    <a class="bg-color" href="<?php echo esc_url(JOURNY_DEMO); ?>"
                       target="_blank"><?php esc_html_e('Theme Demo', 'offspring'); ?></a>
                    <hr>
                    <h4><?php esc_html_e('FAQ', 'offspring'); ?></h4>
                    <p><?php esc_html_e('Need more details? Please try to find an answer or ask your question.', 'offspring'); ?></p>
                    <a class="bg-color" class="bg-color" href="<?php echo esc_url(JOURNY_FAQ); ?>"
                       target="_blank"><?php esc_html_e('Documentation', 'offspring'); ?></a>
                    <hr>
                    <h4><?php esc_html_e('Need Help?', 'offspring'); ?></h4>
                    <p><?php esc_html_e('Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'offspring'); ?></p>
                    <a class="bg-color" href="<?php echo esc_url(JOURNY_SUPPORT); ?>"
                       target="_blank"><?php esc_html_e('Support', 'offspring'); ?></a>
                    <hr>
                    <h4><?php esc_html_e('Leave us a review', 'offspring'); ?></h4>
                    <p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'offspring'); ?></p>
                    <a class="bg-color" href="<?php echo esc_url(JOURNY_REVIEW); ?>"
                       target="_blank"><?php esc_html_e('Review', 'offspring'); ?></a>
                    <hr>
                    <h4><?php esc_html_e('Contact Developers', 'offspring'); ?></h4>
                    <p><?php esc_html_e('If you are looking for development support, feel free to schedule a free call.', 'offspring'); ?></p>
                    <a href="<?php echo esc_url(JOURNY_FREE_CALL); ?>"
                       target="_blank"><?php esc_html_e('Schedule a free call', 'offspring'); ?></a>
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
