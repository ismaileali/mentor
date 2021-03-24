<?php 
//  'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes')
/**
 * Register a custom post type called "testimonials".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_testimonials_init() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'mentor' ),
        'singular_name'         => _x( 'testimonials', 'Post type singular name', 'mentor' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'mentor' ),
        'name_admin_bar'        => _x( 'testimonials', 'Add New on Toolbar', 'mentor' ),
        'add_new'               => __( 'Add New', 'mentor' ),
        'add_new_item'          => __( 'Add New testimonials', 'mentor' ),
        'new_item'              => __( 'New testimonials', 'mentor' ),
        'edit_item'             => __( 'Edit testimonials', 'mentor' ),
        'view_item'             => __( 'View testimonials', 'mentor' ),
        'all_items'             => __( 'All Testimonials', 'mentor' ),
        'search_items'          => __( 'Search Testimonials', 'mentor' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'mentor' ),
        'not_found'             => __( 'No Testimonials found.', 'mentor' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'mentor' ),
        'featured_image'        => _x( 'sect Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mentor' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'archives'              => _x( 'testimonials archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mentor' ),
        'insert_into_item'      => _x( 'Insert into testimonials', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mentor' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this sect', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mentor' ),
        'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'mentor' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'mentor' ),
        'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'mentor' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,

        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    );
 
    register_post_type( 'testimonials', $args );
}
 
add_action( 'init', 'wpdocs_codex_testimonials_init' );