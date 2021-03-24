<?php 
function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'Pricings', 'Post type general name', 'mentor' ),
        'singular_name'         => _x( 'pricings', 'Post type singular name', 'mentor' ),
        'menu_name'             => _x( 'Pricings', 'Admin Menu text', 'mentor' ),
        'name_admin_bar'        => _x( 'pricings', 'Add New on Toolbar', 'mentor' ),
        'add_new'               => __( 'Add New', 'mentor' ),
        'add_new_item'          => __( 'Add New pricings', 'mentor' ),
        'new_item'              => __( 'New pricings', 'mentor' ),
        'edit_item'             => __( 'Edit pricings', 'mentor' ),
        'view_item'             => __( 'View pricings', 'mentor' ),
        'all_items'             => __( 'All Pricings', 'mentor' ),
        'search_items'          => __( 'Search Pricings', 'mentor' ),
        'parent_item_colon'     => __( 'Parent Pricings:', 'mentor' ),
        'not_found'             => __( 'No Pricings found.', 'mentor' ),
        'not_found_in_trash'    => __( 'No Pricings found in Trash.', 'mentor' ),
        'featured_image'        => _x( 'pricings Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mentor' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'archives'              => _x( 'pricings archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mentor' ),
        'insert_into_item'      => _x( 'Insert into pricings', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mentor' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this pricings', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mentor' ),
        'filter_items_list'     => _x( 'Filter Pricings list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'mentor' ),
        'items_list_navigation' => _x( 'Pricings list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'mentor' ),
        'items_list'            => _x( 'Pricings list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'mentor' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'pricings custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'pricings' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 40,
        'menu_icon'          => 'dashicons-ellipsis',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail','custom-fields'),
        'show_in_rest'       => true
    );
      
    register_post_type( 'pricings', $args );
}
add_action( 'init', 'wpdocs_kantbtrue_init' );