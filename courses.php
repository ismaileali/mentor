<?php 

/**
 * Template Name: Courses Page
 */
   get_header(); ?>

<main id="main" data-aos="fade-in">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
    <h2>Courses</h2>
    <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">

  <?php get_template_part('template-parts/home-content/courses', get_post_type() ); ?>

  </div>
</section><!-- End Courses Section -->

</main><!-- End #main -->

<?php get_footer(); ?>