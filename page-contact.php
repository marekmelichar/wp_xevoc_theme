<?php

/*
* Template Name: Contact
*/

get_header() ?>

<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post() ?>
			<div id="contact">
				<div class="row <?php echo get_post_field('row_class'); ?>">
					<div class="column size_60">
						<?php the_post_thumbnail( 'full', array( 'class' => 'contact-img' ) ) ?>
						<?php the_content() ?>
					</div>
					<div class="column size_40"></div>
				</div>
			</div>
		<?php endwhile ?>
	<?php endif ?>

<?php get_footer() ?>
