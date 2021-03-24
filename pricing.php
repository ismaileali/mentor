<?php
      /**
       * Template Name: Pricing Page
       */
    
       get_header();
?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pricing</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <?php
            $args = array(
                    'posts_per_page' => 4, 
                    'post_type' => 'pricings',
                    'post_status' => 'publish',
                    'order'       => 'ASC',
                    'paged' => get_query_var('paged')
                  );  
            $query = new WP_Query( $args );
                  if($query->have_posts() ) {
                        while ($query->have_posts() ) {
                              $query->the_post(); ?>
          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3><?php the_title(); ?></h3>
              <h4><sup>$</sup><?php echo get_post_meta($post->ID,'month-pricings',true); ?><span> / month</span></h4>
              <?php the_content(); ?>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
            <?php }
              }
              wp_reset_postdata();
            ?>
        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>