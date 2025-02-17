<?php
/**
 * Add Theme info Page
 */

function offspring_menu() {
	add_theme_page( esc_html__( 'Offspring', 'offspring' ), esc_html__( 'About Offspring Theme', 'offspring' ), 'edit_theme_options', 'about-offspring', 'offspring_theme_page_display' );
}
add_action( 'admin_menu', 'offspring_menu' );

/**
 * Display About page
 */
function offspring_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="offspring-info-holder">
				<div class="offspring-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'offspring' ); ?></h1>
						<div class="featureDesc">
							<?php echo esc_html__( 'Offspring is a free travel WordPress theme for advisor, business coach, company, corporate, firm, gutenberg, life coach, personal development, portfolio.', 'offspring' ); ?>
						</div>

                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'offspring' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'offspring' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'offspring' ); ?>
                        </div>

                        <h2><?php esc_html_e( 'Responsive Ready', 'offspring' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'offspring' ); ?>
                        </div>

                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'offspring' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'offspring' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .offspring-info-holder-content -->


				<div class="offspring-info-holder-sidebar">

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'offspring' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://offspring.webhelpagency.com/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'offspring' ); ?></a>
								</li>
								<li>
									<a href="<?php echo esc_url( 'https://offspring.webhelpagency.com/documentation/' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'offspring' ); ?></a>
								</li>
							</ul>
						</div>

				</div><!-- .offspring-info-holder-sidebar -->

			</div> <!-- .offspring-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php }