<?php

/**
 * Add scripts & styles
 */
// add_filter( 'wpcf7_load_js', '__return_false' );
// add_filter( 'wpcf7_load_css', '__return_false' );

add_action('wp_enqueue_scripts', 'default_theme_scripts');
function default_theme_scripts()
{

	// wp_enqueue_script(
		// 'default-what-input', get_template_directory_uri() . '/js/vendor/what-input.js'
	// );

	wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/js/nav.js', array( 'jquery' ), '', true );
	// wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '', true );
	// wp_enqueue_script( 'mobile-menu-js', get_template_directory_uri() . '/js/mobile_menu.js', array( 'jquery' ), '', true );
	// 
	// 
	
	wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/js/nav.js', array( 'jquery' ), '', true );

	wp_enqueue_style(
		'default-animations', get_template_directory_uri() . '/css/animate.css'
	);	

	wp_enqueue_style(
		'animate-library', get_template_directory_uri() . '/css/animate.css'
	);

	wp_enqueue_style(
		'default-library', get_template_directory_uri() . '/css/own_lib.css'
	);

	wp_enqueue_style(
		'default-style', get_stylesheet_uri()
	);

	

	// wp_enqueue_style(
	// 	'default-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,800,800i'
	// );

	wp_enqueue_style(
		'ion-icons', get_template_directory_uri() . '/css/ion-icons.css'
	);

	// wp_enqueue_style(
	// 	'slider', get_template_directory_uri() . '/css/slider.css'
	// );

	// wp_enqueue_style(
	// 	'navigation', get_template_directory_uri() . '/css/nav.css'
	// );





	// only load CONTACT FORM 7 on contact page
	// if ( is_page('contact') )
	// {
	// 	if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
	// 		wpcf7_enqueue_scripts();
	// 	}

	// 	if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
	// 		wpcf7_enqueue_styles();
	// 	}
	// }
}
