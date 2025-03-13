<?php
/**
 * Add Theme info Page
 */

function pedicare_child_health_clinic_menu() {
	add_theme_page( esc_html__( 'PediCare Child Health Clinic', 'pedicare-child-health-clinic' ), esc_html__( 'About PediCare Child Health Clinic Theme', 'pedicare-child-health-clinic' ), 'edit_theme_options', 'about-pedicare-child-health-clinic', 'pedicare_child_health_clinic_theme_page_display' );
}
add_action( 'admin_menu', 'pedicare_child_health_clinic_menu' );

/**
 * Display About page
 */
function pedicare_child_health_clinic_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="pedicare-info-holder">
				<div class="pedicare-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'pedicare-child-health-clinic' ); ?></h1>
						<div class="featureDesc">
							<?php echo esc_html__( 'PediCare Child Health Clinic is a free travel WordPress theme for advisor, business coach, company, corporate, firm, gutenberg, life coach, personal development, portfolio.', 'pedicare-child-health-clinic' ); ?>
						</div>

                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'pedicare-child-health-clinic' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'pedicare-child-health-clinic' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'pedicare-child-health-clinic' ); ?>
                        </div>

                        <h2><?php esc_html_e( 'Responsive Ready', 'pedicare-child-health-clinic' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'pedicare-child-health-clinic' ); ?>
                        </div>

                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'pedicare-child-health-clinic' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'pedicare-child-health-clinic' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .pedicare-info-holder-content -->


				<div class="pedicare-info-holder-sidebar">

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'pedicare-child-health-clinic' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://pedicare.webhelpagency.com/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'pedicare-child-health-clinic' ); ?></a>
								</li>
								<li>
									<a href="<?php echo esc_url( 'https://pedicare.webhelpagency.com/documentation/' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'pedicare-child-health-clinic' ); ?></a>
								</li>
							</ul>
						</div>

				</div><!-- .pedicare-info-holder-sidebar -->

			</div> <!-- .pedicare-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php }