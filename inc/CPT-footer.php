<?php 

add_action('init', 'footer_custom_post_type');

function footer_custom_post_type()
{
    $labels = array(
        'name'                  => _x( 'Footers', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Footer', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Footers', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Footer', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Footer', 'textdomain' ),
        'new_item'              => __( 'New Footer', 'textdomain' ),
        'edit_item'             => __( 'Edit Footer', 'textdomain' ),
        'view_item'             => __( 'View Footer', 'textdomain' ),
        'all_items'             => __( 'All Footers', 'textdomain' ),
        'search_items'          => __( 'Search Footers', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Footers:', 'textdomain' ),
        'not_found'             => __( 'No Footers found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Footers found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Footer Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Footer archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Footer', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Footer', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Footers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Footers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Footers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Footer' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'					 => 'dashicons-align-center',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    );
 
    register_post_type( 'Footer', $args );
}


