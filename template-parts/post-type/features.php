<?php 
//  'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes')
/**
 * Register a custom post type called "features".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_features_init() {
    $labels = array(
        'name'                  => _x( 'Features', 'Post type general name', 'mentor' ),
        'singular_name'         => _x( 'features', 'Post type singular name', 'mentor' ),
        'menu_name'             => _x( 'Features', 'Admin Menu text', 'mentor' ),
        'name_admin_bar'        => _x( 'features', 'Add New on Toolbar', 'mentor' ),
        'add_new'               => __( 'Add New', 'mentor' ),
        'add_new_item'          => __( 'Add New features', 'mentor' ),
        'new_item'              => __( 'New features', 'mentor' ),
        'edit_item'             => __( 'Edit features', 'mentor' ),
        'view_item'             => __( 'View features', 'mentor' ),
        'all_items'             => __( 'All Features', 'mentor' ),
        'search_items'          => __( 'Search Features', 'mentor' ),
        'parent_item_colon'     => __( 'Parent Features:', 'mentor' ),
        'not_found'             => __( 'No Features found.', 'mentor' ),
        'not_found_in_trash'    => __( 'No Features found in Trash.', 'mentor' ),
        'featured_image'        => _x( 'features Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mentor' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'archives'              => _x( 'features archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mentor' ),
        'insert_into_item'      => _x( 'Insert into features', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mentor' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this features', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mentor' ),
        'filter_items_list'     => _x( 'Filter Features list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'mentor' ),
        'items_list_navigation' => _x( 'Features list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'mentor' ),
        'items_list'            => _x( 'Features list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'mentor' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'features' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-insert-before',
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
    );
 
    register_post_type( 'features', $args );
}
 
add_action( 'init', 'wpdocs_codex_features_init' );