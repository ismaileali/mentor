<?php 
/**
 * Add a sidebar.
 */
function footer_contact() {
    register_sidebar( array(
        'name'          => __( 'Contact Page', 'mentor' ),
        'id'            => 'contact-info',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'mentor' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footer_contact' );