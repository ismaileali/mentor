<!-- ======= Footer ======= -->
<?php global $redux; ?>
<footer id="footer">

<div class="footer-top">
  <div class="container">
	<div class="row">

	  <div class="col-lg-3 col-md-6 footer-contact">
		   <?php dynamic_sidebar('footer-content'); ?>
	  </div>
	  
	  <div class="col-lg-2 col-md-6 footer-links">
		<h4>Useful Links</h4>
		<?php
            wp_nav_menu( array(
              'theme_location'  => 'useful_links',
              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
              // 'container'       => 'div',
              // 'container_class' => 'collapse navbar-collapse',
              // 'container_id'    => 'bs-example-navbar-collapse-1',
              // 'menu_class'      => 'navbar-nav mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
          ) );       
       ?>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links">
		<h4>Our Services</h4>
		<?php
            wp_nav_menu( array(
              'theme_location'  => 'our_services',
              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
              // 'container'       => 'div',
              // 'container_class' => 'collapse navbar-collapse',
              // 'container_id'    => 'bs-example-navbar-collapse-1',
              // 'menu_class'      => 'navbar-nav mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
          ) );       
       ?>
	  </div>

	  <div class="col-lg-4 col-md-6 footer-newsletter">
		<h4>Join Our Newsletter</h4>
		<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
		<form action="" method="post">
		  <input type="email" name="email"><input type="submit" value="Subscribe">
		</form>
	  </div>

	</div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
	<div class="copyright">
	  &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
	</div>
	<div class="credits">
	  <!-- All the links in the footer should remain intact. -->
	  <!-- You can delete the links only if you purchased the pro version. -->
	  <!-- Licensing information: https://bootstrapmade.com/license/ -->
	  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
	  Designed by <a href="https://bootstrapmade.com/">Mentor</a>
	</div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <?php if(!empty($redux['socail-links']['Twitter'])) : ?>
	<a href="<?php echo $redux['socail-links']['Twitter']; ?>" class="twitter" ><i class="bx bxl-twitter"></i></a>
	<?php endif; ?>
	<?php if(!empty($redux['socail-links']['Facebook'])) : ?>
	<a href="<?php echo $redux['socail-links']['Facebook']; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
	<?php endif; ?>
	<?php if(!empty($redux['socail-links']['Instagram'])) : ?>
	<a href="<?php echo $redux['socail-links']['Instagram']; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
	<?php endif; ?>
	<?php if(!empty($redux['socail-links']['Skype'])) : ?>
	<a href="<?php echo $redux['socail-links']['Skype'] ?>" class="google-plus"><i class="bx bxl-skype"></i></a>
	<?php endif; ?>
	<?php if(!empty($redux['socail-links']['Linkeind'])) : ?>
	<a href="<?php echo $redux['socail-links']['Linkeind']; ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
	<?php endif; ?>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/purecounter/purecounter.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php  echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>

</html>
