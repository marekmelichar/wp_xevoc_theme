<?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>


<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('sitename') ?> Feed" href="<?php echo get_bloginfo('rss2_url') ?>">
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>
	<main>
				<header>
					<div class="row">
						<div class="column size_33 logo-wrap">
							<a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo $image[0] ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
							</a>
						</div>
						<div class="column size_33"></div>
						<div class="column size_33 main-menu">

							<?php wp_nav_menu( array(
									'theme_location'  => 'primary',
									'menu_class'      => 'primary-menu-list',
									'container'       => false
								) ) ?>

						</div>
					</div>
				</header>
