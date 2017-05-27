<?php

/*
* Template Name: Thank you page
*/

get_header() ?>

<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post() ?>
			<div id="thank-you">
				<div class="row <?php echo get_post_field('row_class'); ?>">
					<div class="column size_50">
						<?php the_post_thumbnail( 'full', array( 'class' => 'thank-you-img' ) ) ?>
					</div>
					<div class="column size_50">
						<?php the_content() ?>
					</div>
				</div>
			</div>
		<?php endwhile ?>
	<?php endif ?>

<?php get_footer() ?>
