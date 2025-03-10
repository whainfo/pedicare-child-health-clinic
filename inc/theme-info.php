<?php
/**
 * Add Theme info Page
 */

function PediCare_Child_Health_Clinic_menu() {
	add_theme_page( esc_html__( 'PediCare Child Health Clinic', 'PediCare-Child-Health-Clinic' ), esc_html__( 'About PediCare Child Health Clinic Theme', 'PediCare-Child-Health-Clinic' ), 'edit_theme_options', 'about-PediCare-Child-Health-Clinic', 'PediCare_Child_Health_Clinic_theme_page_display' );
}
add_action( 'admin_menu', 'PediCare_Child_Health_Clinic_menu' );

/**
 * Display About page
 */
function PediCare_Child_Health_Clinic_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="pedicare-info-holder">
				<div class="pedicare-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'PediCare-Child-Health-Clinic' ); ?></h1>
						<div class="featureDesc">
							<?php echo esc_html__( 'PediCare Child Health Clinic is a free travel WordPress theme for advisor, business coach, company, corporate, firm, gutenberg, life coach, personal development, portfolio.', 'PediCare-Child-Health-Clinic' ); ?>
						</div>

                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'PediCare-Child-Health-Clinic' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'PediCare-Child-Health-Clinic' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'PediCare-Child-Health-Clinic' ); ?>
                        </div>

                        <h2><?php esc_html_e( 'Responsive Ready', 'PediCare-Child-Health-Clinic' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'PediCare-Child-Health-Clinic' ); ?>
                        </div>

                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'PediCare-Child-Health-Clinic' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'PediCare-Child-Health-Clinic' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .pedicare-info-holder-content -->


				<div class="pedicare-info-holder-sidebar">

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'PediCare-Child-Health-Clinic' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://pedicare.webhelpagency.com/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'PediCare-Child-Health-Clinic' ); ?></a>
								</li>
								<li>
									<a href="<?php echo esc_url( 'https://pedicare.webhelpagency.com/documentation/' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'PediCare-Child-Health-Clinic' ); ?></a>
								</li>
							</ul>
						</div>

				</div><!-- .pedicare-info-holder-sidebar -->

			</div> <!-- .pedicare-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php }