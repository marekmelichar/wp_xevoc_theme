


	</main>

		<footer class="footer gray-bg">
			<div class="row">
				<div class="column size_50 text-right">
					<?php if ( get_theme_mod( 'footer_logo' ) ) : ?>
							<div class='footer-logo'>
									<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
							</div>
					<?php endif ?>
				</div>
				<div class="column size_50 footer-copyright text-left">
					<?php echo get_theme_mod('copy_by') ?> - <?php echo get_theme_mod('copy_text') ?>
				</div>
			</div>
		</footer>

	<?php wp_footer() ?>
</body>
</html>
