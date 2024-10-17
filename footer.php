<?php
/**
 * The Footer File
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package bikebaer
 * @since Bikebaer Custom Theme 1.0
 */
?>

		<section id="footer">
			<div class="container-fluid">
				<div class="row inner-footer">
					<div class="col-12 g-0">

						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-3 contacts">
									<?php echo get_theme_mod( 'footer_address' ); ?>
									<?php
									// Default values for social media channels repeater (kirki)
									// Documentation: https://docs.themeum.com/kirki/controls/repeater/
									$defaults = [
										'channel_name'	=> '',
										'channel_icon'	=> '',
										'channel_url'	=> '',
										'icon_style'	=> ''
									];
									// theme mod settings to check
									$settings = get_theme_mod( 'social_media', $defaults );
									?><ul class="social-media">
									<?php foreach ( $settings as $setting ) : ?>
										<li><a href="<?php echo $setting['channel_url']; ?>" target="_blank" rel="no-follow"><img src="<?php echo $setting['channel_icon']['url']; ?>" alt="<?php echo $setting['channel_name']; ?>" style="<?php echo $setting['icon_style']; ?>" /></a></li>
									<?php endforeach; ?>
									</ul>
								</div>
								<div class="col-md-12 col-lg-5 officehours">
									<?php echo get_theme_mod( 'footer_office_hours' ); ?>
								</div>
								<div class="col-md-12 col-lg-4 logo">
									<a href="/"><img src="<?php echo get_theme_file_uri( 'images/bikebaer.svg' ); ?>" alt="<?php echo get_the_title(); ?>" /></a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section><!-- /sitefooter -->

		<section id="copy">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<p>© 2024 by Bikebär&nbsp;|&nbsp;Mit <svg viewBox="0 0 1792 1792" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" style="height: 0.8rem;"><path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26T145 952.5 77 855 23.5 734 0 596q0-220 127-344t351-124q62 0 126.5 21.5t120 58T820 276t76 68q36-36 76-68t95.5-68.5 120-58T1314 128q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z" fill="#e25555"></path></svg> gemacht von <a href="https://kuckmal.gmbh" target="_blank" rel="no-follow">Kuckmal GmbH</a>&nbsp;|&nbsp;<a href="#" onclick="window.displayPreferenceModal();return false;" id="termly-consent-preferences">Consent Preferences</a></p>
					</div>
				</div>
			</div>
		</section><!-- /.footer -->

		<?php wp_footer(); ?>

	</body>
</html>