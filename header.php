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

	<!-- Smartlook -->

<script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '60daf4b328a22525ad772232e3f495292bd4de1d');
</script>



<!-- Leady -->

<script type="text/javascript">
        var leady_track_key="6hqtT2N46BKVgvSC";
        (function(){
                var l=document.createElement("script");l.type="text/javascript";l.async=true;
                l.src='https://t.leady.com/'+leady_track_key+"/L.js";
                var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(l,s);
        })();
</script>


<!-- Google Analytics -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62037281-4', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class() ?>>
	<main class="<?php echo get_post_field('page_class'); ?>">
				<header>
					<div class="row">
						<div class="column size_50 logo-wrap">
							<a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo $image[0] ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
							</a>
						</div>
						<!-- <div class="column size_33"></div> -->
						<div class="column size_50 main-menu">
							<input type="checkbox" id="menu-state" class="menu-state">
							<nav id="mobile-nav">
							  <div class="mobile-nav-content">
							    <ul class="mobile-nav-content-header">
							      <li class="mobile-nav-content-header-item menu-icon">
							        <label class="menu-icon-label" for="menu-state" aria-hidden="true">
							          <span class="hamburger hamburger-top">
							            <span class="hamburger-itself hamburger-itself-top"></span>
							          </span>
							          <span class="hamburger hamburger-bottom">
							            <span class="hamburger-itself hamburger-itself-bottom"></span>
							          </span>
							        </label>
							        <a href="#" class="menu-anchor menu-anchor-open" id="menu-anchor-open">
							          <span class="menu-anchor-label">Open Menu</span>
							        </a>
							        <a href="#" class="menu-anchor menu-anchor-close" id="menu-anchor-close">
												<span class="menu-anchor-label">Close Menu</span>
											</a>
							      </li>
							    </ul>

							    <?php
							    	if (!is_page('howto')) {
							    ?>

												<?php wp_nav_menu( array(
						 							'theme_location'  => 'primary',
						 							'menu_class'      => 'primary-menu-list',
						 							'container'       => false
						 						) ) ?>

								  <?php
								    }
						    	?>

						    	<?php
							    	if (is_page('howto')) {
							    ?>

												<?php wp_nav_menu( array(
						 							'theme_location'  => 'howto',
						 							'menu_class'      => 'primary-menu-list',
						 							'container'       => false
						 						) ) ?>

								  <?php
								    }
						    	?>


							  </div>
							</nav>
						</div>
					</div>
				</header>
