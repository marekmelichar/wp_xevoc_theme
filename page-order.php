<?php

/*
* Template Name: Contact
*/

get_header() ?>

<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post() ?>
			<div id="contact" class="row full-width">
				<div class="row">
					<h1><?php the_title() ?></h1>
				</div>
				<div class="row <?php echo get_post_field('row_class'); ?>">
					<div class="column size_100 text-center">
						<?php the_post_thumbnail( 'full', array( 'class' => 'contact-img' ) ) ?>
						<?php the_content() ?>
					</div>
				</div>
				<div class="row order-form">
					<div class="column size_100">
						<?php echo do_shortcode( get_post_meta( get_the_id(), 'contact_form', true ) ); ?>
					</div>
				</div>
			</div>
		<?php endwhile ?>
	<?php endif ?>

<?php get_footer() ?>
