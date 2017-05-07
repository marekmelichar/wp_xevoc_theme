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


						<!-- In case of SPEC section -->
							<?php if(get_post_meta($post->ID, 'spec_technical_features_img', true) || 
							 get_post_meta($post->ID, 'spec_technical_features_title', true) || 
							 get_post_meta($post->ID, 'spec_technical_features_list', true)
							 ): ?>
							 	<div class="row">
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
								</div>
							<?php endif; ?>
						
							<?php if(get_post_meta($post->ID, 'spec_service_img', true) || 
							 get_post_meta($post->ID, 'spec_service_title', true) || 
							 get_post_meta($post->ID, 'spec_service_list', true)
							 ): ?>
							 	<div class="row margin-top-2">
									<div class="column size_50">
										<div class="spec-img service">
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
										<div class="spec-img customization">
											<img src="<?php echo get_post_field('spec_customization_img'); ?>" />	
										</div>
										<div class="spec-title">
											<?php echo get_post_field('spec_customization_title'); ?>
										</div>
										<div class="spec-list">
											<?php echo get_post_field('spec_customization_list'); ?>	
										</div>
									</div>
								</div>
							<?php endif; ?>


							
							<!-- In case of PRICES section -->
								<?php if(get_post_meta($post->ID, 'price_column1_title', true) || get_post_meta($post->ID, 'price_column1_list', true) || get_post_meta($post->ID, 'price_column1_price', true) || get_post_meta($post->ID, 'price_column1_periodically', true) || get_post_meta($post->ID, 'price_column1_button_text', true) || get_post_meta($post->ID, 'price_column1_button_color', true) || get_post_meta($post->ID, 'price_column1_button_color', true)
							 ): ?>
							 	<div class="row">
									<div class="column size_33">
										<div class="price-box">
											<div class="price-header">
												<h2 class="heading">
													<?php echo get_post_field('price_column1_title'); ?>
												</h2>
											</div>	
											<div class="price-body">
												<div class="price-features-list"><?php echo get_post_field('price_column1_list'); ?></div>
												<div class="price-amount">
													<?php echo get_post_field('price_column1_price'); ?>	
												</div>
													<div class="price-period"><?php echo get_post_field('price_column1_periodically'); ?>	
												</div>
											</div>
											<div class="price-footer">
												<a href="<?php echo get_post_field('price_column1_link_target'); ?>" class="price-button <?php echo get_post_field('price_column1_button_color'); ?>">
													<?php echo get_post_field('price_column1_button_text'); ?>
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							

						</article>	
					</div>
				</div>

			<?php endif ?>	

			

		<?php endwhile ?>
	<?php else : ?>	

		<?php _e('no sections :(', 'sections') ?>
		
	<?php endif ?>

<?php get_footer() ?>
