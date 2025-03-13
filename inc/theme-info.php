<?php
/**
 * Add Theme info Page
 */

function dentix_menu() {
	add_theme_page( esc_html__( 'PediCare Child Health Clinic', 'dentix' ), esc_html__( 'About PediCare Child Health Clinic Theme', 'dentix' ), 'edit_theme_options', 'about-dentix', 'dentix_theme_page_display' );
}
add_action( 'admin_menu', 'dentix_menu' );

/**
 * Display About page
 */
function dentix_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="pedicare-info-holder">
				<div class="pedicare-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'dentix' ); ?></h1>
						<div class="featureDesc">
							<?php echo esc_html__( 'PediCare Child Health Clinic is a free travel WordPress theme for advisor, business coach, company, corporate, firm, gutenberg, life coach, personal development, portfolio.', 'dentix' ); ?>
						</div>

                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'dentix' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'dentix' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'dentix' ); ?>
                        </div>

                        <h2><?php esc_html_e( 'Responsive Ready', 'dentix' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'dentix' ); ?>
                        </div>

                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'dentix' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'dentix' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .pedicare-info-holder-content -->


				<div class="pedicare-info-holder-sidebar">

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'dentix' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://pedicare.webhelpagency.com/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'dentix' ); ?></a>
								</li>
								<li>
									<a href="<?php echo esc_url( 'https://pedicare.webhelpagency.com/documentation/' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'dentix' ); ?></a>
								</li>
							</ul>
						</div>

				</div><!-- .pedicare-info-holder-sidebar -->

			</div> <!-- .pedicare-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php }