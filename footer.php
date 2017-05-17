


	</main>

		<footer class="footer blue-bg">
			<div class="container">
				<?php if ( get_theme_mod( 'footer_logo' ) ) : ?>
						<div class='footer-logo'>
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
						</div>
				<?php endif ?>
				<p>
					<?php echo get_theme_mod('copy_by') ?>
				</p>
				<p>
					<?php echo get_theme_mod('copy_text') ?>
				</p>
			</div>
		</footer>

	<?php wp_footer() ?>
</body>
</html>
