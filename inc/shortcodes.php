<?php

add_shortcode( 'slideshow', 'xevoc_slideshow_shortcode' );
function xevoc_slideshow_shortcode( $atts ) {

  $atts = shortcode_atts( array(
    'slideshow_class' => 'slideshow',
    'slide_class' => 'slide'
  ), $atts );

  // create a html
  $html = 'i am gonna be the slideshow here';

  return $html;
}
