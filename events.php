<?php 
/**
 * Template Name: Events Page
 */


     get_header(); 
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <?php
            $args = array(
                'posts_per_page'   => '10',
                'post_type'        => 'event',
                'post_status'      => 'publish',
                'paged'            => get_query_var( 'paged')

            );
            $query = new WP_Query( $args );   
                if($query->have_posts() ) {
                    global $post;
                    while ( $query->have_posts() ) {
                        $query->the_post();
              ?>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                 <?php the_post_thumbnail('',['class'=> 'img-fluid']); ?>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="font-italic text-center"><?php echo get_post_meta($post->ID,'events-date',true); ?></p>
                <p class="card-text"><?php the_content(); ?></p>
              </div>
            </div>
          </div>
        <?php } 
              } 
              wp_reset_postdata(); 
          ?>
        </div>
      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php get_footer(); ?>