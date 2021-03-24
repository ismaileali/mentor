<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mentor
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet"> 

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
	  <?php wp_body_open(); ?>
	  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mentor' ); ?></a>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
	    <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
		?>
	        <h1 class="logo me-auto"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	    <?php
			else :
		?>
		      <p class="logo me-auto"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
		<?php
			endif;
			$mentor_description = get_bloginfo( 'description', 'display' );
			if ( $mentor_description || is_customize_preview() ) :
		?>
		      <p class="site-description"><?php // echo $mentor_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
       <?php
            wp_nav_menu( array(
              'theme_location'  => 'header_nav',
              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
              // 'container'       => 'div',
              // 'container_class' => 'collapse navbar-collapse',
              // 'container_id'    => 'bs-example-navbar-collapse-1',
              // 'menu_class'      => 'navbar-nav mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
          ) );       
       ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="courses.html" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->
