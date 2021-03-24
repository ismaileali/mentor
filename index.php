<?php get_header(); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
         <?php get_template_part('template-parts/home-content/banner-content', get_post_type() ); ?>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

      <?php get_template_part('template-parts/home-content/about', get_post_type() );  ?>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
         <?php get_template_part('template-parts/home-content/about-carousel', get_post_type()); ?>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

      <?php get_template_part('template-parts/home-content/benefits', get_post_type() );  ?>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php
              $args = array(
                      'posts_per_page' => 12, 
                      'post_type' => 'features',
                      'post_status' => 'publish',
                      'paged' => get_query_var('paged')
                    );  
              $query = new WP_Query( $args );
                    if($query->have_posts() ) {
                          while ($query->have_posts() ) {
                                $query->the_post(); ?>
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <?php the_content(); ?>
              <h3><?php the_title(); ?></h3>
            </div>
          </div>
          <?php }
              }
              wp_reset_postdata();
           ?>
        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <!-- End Popular Courses Section -->
     <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>
           <?php get_template_part('template-parts/home-content/courses', get_post_type() ); ?>
      </div>
    </section><!-- End Popular Courses Section -->
    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
           <?php get_template_part('template-parts/home-content/trainers', get_post_type() ); ?>
      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>