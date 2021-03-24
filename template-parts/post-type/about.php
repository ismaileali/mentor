<?php 
//  'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes')
/**
 * Register a custom post type called "about".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_about_init() {
    $labels = array(
        'name'                  => _x( 'Abouts', 'Post type general name', 'mentor' ),
        'singular_name'         => _x( 'About', 'Post type singular name', 'mentor' ),
        'menu_name'             => _x( 'Abouts', 'Admin Menu text', 'mentor' ),
        'name_admin_bar'        => _x( 'About', 'Add New on Toolbar', 'mentor' ),
        'add_new'               => __( 'Add New', 'mentor' ),
        'add_new_item'          => __( 'Add New About', 'mentor' ),
        'new_item'              => __( 'New About', 'mentor' ),
        'edit_item'             => __( 'Edit About', 'mentor' ),
        'view_item'             => __( 'View About', 'mentor' ),
        'all_items'             => __( 'All Abouts', 'mentor' ),
        'search_items'          => __( 'Search Abouts', 'mentor' ),
        'parent_item_colon'     => __( 'Parent Abouts:', 'mentor' ),
        'not_found'             => __( 'No Abouts found.', 'mentor' ),
        'not_found_in_trash'    => __( 'No Abouts found in Trash.', 'mentor' ),
        'featured_image'        => _x( 'About Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mentor' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mentor' ),
        'archives'              => _x( 'About archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mentor' ),
        'insert_into_item'      => _x( 'Insert into About', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mentor' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this About', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mentor' ),
        'filter_items_list'     => _x( 'Filter Abouts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'mentor' ),
        'items_list_navigation' => _x( 'Abouts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'mentor' ),
        'items_list'            => _x( 'Abouts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'mentor' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'about' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,

        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
    );
 
    register_post_type( 'about', $args );
}
 
add_action( 'init', 'wpdocs_codex_about_init' );