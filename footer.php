			<footer id="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div class="wrap">
					<section class="footer-left">
						<img src="<?php ex_logo('primary', 'light'); ?>" alt="Logo for <?php ex_brand(); ?>" />
						<?php
							ex_contact('phone', true, 'global');
							ex_contact('email', true, 'global');
							ex_contact('address', true, 'global');
						?>
						<nav class="nav-footer" role="navigation">
							<?php wp_nav_menu(array(
								'container' => 'ul',                    // enter '' to remove nav container
								'menu' => __('Footer', 'exonym'),	      // nav name
								'theme_location' => 'footer-menu',		  // where it's located in the theme
								'before' => '',							            // before the menu
								'after' => '',							            // after the menu
								'link_before' => '',					          // before each link
								'link_after' => '',						          // after each link
								'depth' => 1,							              // limit the depth of the nav
								'fallback_cb' => ''						          // fallback function
							)); ?>
							<p class="copyright">&copy; <?php echo date('Y') . ' '; ex_brand('legal'); ?></p>
						</nav>
					</section>
					<section class="footer-right">
						<?php echo do_shortcode('[contact-form-7 id="132" title="Footer Contact Form"]'); ?>
					</section>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
