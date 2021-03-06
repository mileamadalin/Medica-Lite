		<?php
		/**
		 *  The template for displaying Footer.
		 *
		 *  @package ThemeIsle.
		 */
		?>
		<footer id="footer">
			<div class="wrapper cf">

				<?php
				if ( get_theme_mod( 'medica_lite_general_footer_aboutustitle' ) || get_theme_mod( 'medica_lite_general_footer_aboutusimage' ) || get_theme_mod( 'medica_lite_footer_aboutus_content' ) ) { ?>

					<div class="footer-box">
						<?php
						if ( get_theme_mod( 'medica_lite_general_footer_aboutustitle', 'About Us' ) ) {
							echo '<div class="footer-box-title">'. esc_attr( get_theme_mod( 'medica_lite_general_footer_aboutustitle', 'About Us' ) ) .'</div>';
						}
						?>
						<div class="footer-box-entry">
							<?php
							if ( get_theme_mod( 'medica_lite_general_footer_aboutusimage' ) ) {
								echo '<img src="'. esc_url( get_theme_mod( 'medica_lite_general_footer_aboutusimage' ) ) .'" class="cf" alt="'. esc_attr( get_theme_mod( 'medica_lite_general_footer_aboutustitle', 'About Us' ) ) .'">';
							}
							?>
							<div class="cf"></div>
							<?php echo esc_textarea( get_theme_mod( 'medica_lite_general_footer_aboutusentry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi. Ut vitae porttitor ante. Etiam vel porttitor eros, id malesuada elit. Vivamus non orci erat.' ) ); ?>
						</div><!--/div .footer-box-entry-->

					</div><!--/div .footer-box-->

				<?php }
				?>

				<div class="footer-box">
					<?php
					if ( get_theme_mod( 'medica_lite_general_footer_menutitle', 'Menu' ) ) {
						echo '<div class="footer-box-title">'. esc_attr( get_theme_mod( 'medica_lite_general_footer_menutitle', 'Menu' ) ) .'</div>';
					}
					?>
					<div class="footer-box-entry">
							<?php
							if ( has_nav_menu( 'footer-navigation' ) ) {

								wp_nav_menu( array(
										'theme_location'	=> 'footer-navigation',
										'menu_id'			=> 'menu-footer'
									)
								);

							} else {

								echo '<ul id="menu-footer">';
								echo '<li><a href="'. esc_url( home_url() ) .'" title="'. __( 'Home', 'medica_lite' ) .'">'. __( 'Home', 'medica_lite' ) .'</a></li>';
								wp_list_pages( array(
										'title_li'	=> '',
									)
								);
								echo '</ul>';

							}
							?>
					</div><!--/div .footer-box-entry-->
				</div><!--/div .footer-box-->
				<div class="footer-box">
					<?php
					if ( get_theme_mod( 'medica_lite_general_contactinfo_addresstitle', 'Address' ) ) {
						echo '<div class="footer-box-title">'. esc_attr( get_theme_mod( 'medica_lite_general_contactinfo_addresstitle', 'Address' ) ) .'</div>';
					}
					?>
					<div class="footer-box-entry">
						<?php
						if ( get_theme_mod( 'medica_lite_general_contactinfo_addressentry', 'Northwest Valley<br /> 35th Ave. at Northern<br /> 7805 N 35th Ave<br /> Phoenix, AZ 85051' ) ) {
							echo '<span>'. get_theme_mod( 'medica_lite_general_contactinfo_addressentry', 'Northwest Valley<br /> 35th Ave. at Northern<br /> 7805 N 35th Ave<br /> Phoenix, AZ 85051' ) .'</span>';
						}
						?>
						<div class="header-contact">
								<?php
								if ( get_theme_mod( 'medica_lite_general_contactinfo_telephonenumber', '+1 223 456 23' ) ) {
									echo '<a href="tel:'. esc_attr( get_theme_mod( 'medica_lite_general_contactinfo_telephonenumber', '+1 223 456 23' ) ) .'"><i class="icon-phone"></i> '. esc_attr( get_theme_mod( 'medica_lite_general_contactinfo_telephonenumber', '+1 223 456 23' ) ) .'</a>';
								}
								?>
								<ul class="cf">
									<?php
									if ( get_theme_mod( 'medica_lite_general_socialslink_facebooklink', 'http://www.facebook.com' ) ) {
										echo '<li class="footer-facebook-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socialslink_facebooklink', 'http://www.facebook.com' ) ) .'" title="'. __( 'Facebook', 'medica_lite' ) .'" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'medica_lite_general_socialslink_twitterlink', 'http://www.twitter.com' ) ) {
										echo '<li class="footer-twitter-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socialslink_twitterlink', 'http://www.twitter.com' ) ) .'" title="'. __( 'Twitter', 'medica_lite' ) .'" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'medica_lite_general_socialslink_youtubelink', 'http://www.youtube.com' ) ) {
										echo '<li class="footer-youtube-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socialslink_youtubelink', 'http://www.youtube.com' ) ) .'" title="'. __( 'YouTube', 'medica_lite' ) .'" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'medica_lite_general_socialslink_linkedinlink', 'http://www.linkedin.com' ) ) {
										echo '<li class="footer-linkedin-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socialslink_linkedinlink', 'http://www.linkedin.com' ) ) .'" title="'. __( 'LinkedIn', 'medica_lite' ) .'" target="_blank"></a></li>';
									}
									?>
								</ul>
						</div><!--/div .header-contact-->
					</div>
				</div><!--/div .footer-box-->
			</div><!--/div .wrapper-->
			<div class="copyright-name">
				<div class="wrapper">
					<?php echo htmlspecialchars_decode( get_theme_mod( 'medica_lite_general_footer_copyrightentry', 'Copyright' ) ); ?> &copy; <a href="https://themeisle.com/themes/medica-lite/" target="_blank" rel="nofollow"><?php _e( 'Medica Lite', 'medica_lite' ); ?></a> <?php _e('Proudly powered by','medica_lite'); ?> <a href="http://www.wordpress.org" title="WordPress" target="_blank"><?php _e('WordPress','medica_lite'); ?></a>.
				</div><!--/div .wrapper-->
			</div><!-- /div .copyright-name -->
		</footer><!--/footer #footer-->
		<?php wp_footer(); ?>
	</body>
</html>