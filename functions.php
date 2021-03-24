<?php
// function mytheme_script() { 
//     wp_enqueue_style('animate', get_template_directory_uri() .'/assets/vendor/animate.css/animate.min.css', array(),  '4.1.1', true);
//     wp_enqueue_style('aos', get_template_directory_uri() .'/assets/vendor/aos/aos.css', array(),  null, true);
//     wp_enqueue_style('bootstrap-style', get_template_directory_uri() .'assets/vendor/bootstrap/css/bootstrap.min.css', array(),  '5.0.0', true);
//     wp_enqueue_style('bootstrap-icons', get_template_directory_uri() .'/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(),  '5.0.0', true);
//     wp_enqueue_style('boxicons', get_template_directory_uri() .'/assets/vendor/boxicons/css/boxicons.min.css', array(),  null, true);
//     wp_enqueue_style('remixicon', get_template_directory_uri() .'/assets/vendor/remixicon/remixicon.css', array(),  '2.5.0', true);
//     wp_enqueue_style('swiper-bundle', get_template_directory_uri() .'/assets/vendor/swiper/swiper-bundle.min.css', array(),  '6.4.10', true);
//     wp_enqueue_style('theme-css', get_template_directory_uri() .'/assets/css/style.css', array(),  '4.0.0', true);
//     wp_enqueue_style('mytheme_main_style', get_stylesheet_uri(), array(),  '4.0.0', true); 

//     // add script
//      wp_enqueue_script('jquery');
//      wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery'), null, true);
//      wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'),  '5.0.0', true);
//      wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array('jquery'),  '3.0', true);
//      wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter.js', array('jquery'),  null, true);
//      wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array('jquery'),  '6.0.10', true);
//      wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'),  '4.0.0', true);
// } 

// add_action('wp_enqueue_scripts', 'mytheme_script');

/**
 * Essential theme supports
 * */
function theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );
 
    /** tag-title **/
    add_theme_support( 'title-tag' );
 
    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);
 
    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );
 
    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption','custom-field') );
 
    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' ); 



//     // Load the theme stylesheets
//     function theme_styles()  
//     { 
       

//         // Example of loading a jQuery slideshow plugin just on the homepage
//         wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );

//         // Load all of the styles that need to appear on all pages
//         wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
//         wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
        

//         // Conditionally load the FlexSlider CSS on the homepage
//         if(is_page('home')) {
//             wp_enqueue_style('flexslider');
//         }

//     }
//     add_action('wp_enqueue_scripts', 'theme_styles');

//     function myscript()
//     { ?>
//         <script>
//             function name() {
                
//             }
//         </script>
//    <?php }
//     add_action('wp_footer', 'myscript');

// }
// add_action('after_setup_theme','theme_setup');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
/**
 * Register Navigation
*/
register_nav_menus( array(
    'header_nav' => __( 'Header Menu', 'mentor' ),
    'useful_links' => __( 'Useful Links', 'mentor' ),
    'our_services' => __( 'Our Services', 'mentor' )
) );
/**
* Add Post Type "About Section"
*/
require_once get_template_directory() .'/template-parts/post-type/about.php';
/**
* Add Post Type "Courses Section"
*/
require_once get_template_directory() .'/template-parts/post-type/events.php';
/**
* Add Post Type "Pricings Section"
*/
require_once get_template_directory() .'/template-parts/post-type/pricing.php';
/**
* Add Post Type "Features Section"
*/
require_once get_template_directory() .'/template-parts/post-type/features.php';
/**
* Add widget "Footer First"
*/
require_once get_template_directory() .'/inc/footer-content.php';
/**
* Add widget "Contact info"
*/
require_once get_template_directory() .'/inc/contact-page.php/info-widget.php';
