<?php

/*
* Template Name: Thank you page
*/

get_header() ?>

<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post() ?>
			<div id="thank-you">
				<div class="row">
					<h1><?php the_title() ?></h1>
				</div>
				<div class="row <?php echo get_post_field('row_class'); ?>">
					<div class="column size_100 text-center">
						<?php the_post_thumbnail( 'full', array( 'class' => 'contact-img' ) ) ?>
					</div>
				</div>
				<div class="row thank-you-content">
					<div class="column size_100 text-center">
						<?php the_content() ?>
					</div>
				</div>
			</div>
		<?php endwhile ?>
	<?php endif ?>

<?php get_footer() ?>
