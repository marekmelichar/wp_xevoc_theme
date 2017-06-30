<?php

/*
* Template Name: Legal Information
*/

get_header() ?>

<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post() ?>
			<div id="legal-information">
				<div class="row">
					<div class="column size_100">
						<article>
							<h1><?php the_title() ?></h1>
							<?php the_content() ?>
						</article>
					</div>
				</div>
			</div>
		<?php endwhile ?>
	<?php endif ?>

<?php get_footer() ?>
