<?php
/**
 * Modify Main WP Loop Query
 */

add_action( 'pre_get_posts', 'xroom_modify_main_query' );

function xroom_modify_main_query( $query )
{
    // show custom post types on homepage
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'section', 'banner', 'footer' ) );
    }

    if ($query->is_search) {
      $query->set( 'post_type', array( 'section', 'banner', 'footer' ) );
    }
}
