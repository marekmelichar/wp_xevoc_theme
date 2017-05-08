


	</main>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post() ?>
			<?php if (get_post_type( get_the_ID() ) == 'footer') : ?>
				<footer class="footer margin-top-2 <?php echo get_post_field('row_bg_color'); ?>">
					<div class="row">
						<div class="column size_100">
							<div class="footer-logo">
								<?php the_post_thumbnail( 'full', array( 'class' => 'section-img' ) ) ?>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</footer>
			<?php endif; ?>	
		<?php endwhile; ?>
	<?php endif; ?>

	<?php wp_footer() ?>
</body>
</html>
