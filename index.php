<?php

get_header() ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post() ?>
			<?php //bd_parse_post_variables() ?>
			<?php '<pre>'; ?>
			<?php //echo $post_var ?>
			<?php //echo $post_images and $post_images_label ?>
			<?php //echo $post_links and $post_links_label ?>
			<?php //echo $post_files and $post_files_label ?>
			<?php //echo get_post_meta( get_the_ID(), '_custom_field', true ) ?>
			<?php '</pre>'; ?>

			<?php if (get_post_type( get_the_ID() ) == 'banner' ) : ?>
				
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				
				<div class="row banner" style="background-image: url('<?php echo $thumb[0]; ?>')">
					<div class="column size_100">
						<article>
							<h1 class="heading"><?php the_title() ?></h1>
							<?php the_content() ?>
						</article>	
					</div>
				</div>	
			
			<?php endif; ?>
			
			<?php if (get_post_type( get_the_ID() ) == 'section' ) : ?>

				<div class="row <?php echo get_post_field('row_bg_color'); ?>">
					<div class="column size_100">
						<article id="<?php echo get_post_field('smooth_scroll_id'); ?>">
							<h1 class="<?php echo get_post_field('h1_custom_classes'); ?>"><?php the_title() ?></h1>
							<?php the_content() ?>
							<?php the_post_thumbnail( 'full', array( 'class' => 'section-img' ) ) ?>
							
							<div class="row">

							<?php if(get_post_meta($post->ID, 'spec_technical_features_img', true) || 
							 get_post_meta($post->ID, 'spec_technical_features_title', true) || 
							 get_post_meta($post->ID, 'spec_technical_features_list', true)
							 ): ?>
									<div class="column size_50">
										<div class="spec-img technical-features">
											<img src="<?php echo get_post_field('spec_technical_features_img'); ?>" />	
										</div>
										<div class="spec-title">
											<?php echo get_post_field('spec_technical_features_title'); ?>
										</div>
										<div class="spec-list">
											<?php echo get_post_field('spec_technical_features_list'); ?>	
										</div>
									</div>
							<?php endif; ?>

							<?php if(get_post_meta($post->ID, 'spec_safety_img', true) || 
							 get_post_meta($post->ID, 'spec_safety_title', true) || 
							 get_post_meta($post->ID, 'spec_safety_list', true)
							 ): ?>
									<div class="column size_50">
										<div class="spec-img safety">
											<img src="<?php echo get_post_field('spec_safety_img'); ?>" />	
										</div>
										<div class="spec-title">
											<?php echo get_post_field('spec_safety_title'); ?>
										</div>
										<div class="spec-list">
											<?php echo get_post_field('spec_safety_list'); ?>	
										</div>
									</div>
							<?php endif; ?>

							</div>

							<div class="row">

							<?php if(get_post_meta($post->ID, 'spec_service_img', true) || 
							 get_post_meta($post->ID, 'spec_service_title', true) || 
							 get_post_meta($post->ID, 'spec_service_list', true)
							 ): ?>
									<div class="column size_50">
										<div class="spec-img technical-features">
											<img src="<?php echo get_post_field('spec_service_img'); ?>" />	
										</div>
										<div class="spec-title">
											<?php echo get_post_field('spec_service_title'); ?>
										</div>
										<div class="spec-list">
											<?php echo get_post_field('spec_service_list'); ?>	
										</div>
									</div>
							<?php endif; ?>

							<?php if(get_post_meta($post->ID, 'spec_customization_img', true) || 
							 get_post_meta($post->ID, 'spec_customization_title', true) || 
							 get_post_meta($post->ID, 'spec_customization_list', true)
							 ): ?>
									<div class="column size_50">
										<div class="spec-img safety">
											<img src="<?php echo get_post_field('spec_customization_img'); ?>" />	
										</div>
										<div class="spec-title">
											<?php echo get_post_field('spec_customization_title'); ?>
										</div>
										<div class="spec-list">
											<?php echo get_post_field('spec_customization_list'); ?>	
										</div>
									</div>
							<?php endif; ?>

							</div>

						</article>	
					</div>
				</div>

			<?php endif ?>	

			

		<?php endwhile ?>
	<?php else : ?>	

		<?php _e('no sections :(', 'sections') ?>
		
	<?php endif ?>

<?php get_footer() ?>
