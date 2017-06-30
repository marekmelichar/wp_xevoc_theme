


	</main>

		<footer class="footer gray-bg">
			<div class="row">
				<div class="column size_33 footer-copy-by text-center">
					<?php echo get_theme_mod('copy_by') ?> - <?php echo get_theme_mod('copy_text') ?>
				</div>
				<div class="column size_33 footer-copyright text-center">
					<?php if ( get_theme_mod( 'footer_logo' ) ) : ?>
							<div class='footer-logo'>
									<a href="https://www.ixperta.com" rel='ixperta web'><img src='<?php echo esc_url( get_theme_mod( 'footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
							</div>
					<?php endif ?>
				</div>
				<div class="column size_33 text-center">
					<?php wp_nav_menu( array(
						'theme_location'  => 'footer',
						'menu_class'      => 'footer-menu-list',
						'container'       => false
					) ) ?>
				</div>
			</div>
		</footer>

	<?php wp_footer() ?>
</body>
</html>
