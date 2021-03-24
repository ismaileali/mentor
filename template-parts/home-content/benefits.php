<div class="row">
          <?php
              $args = array(
                      'category_name' => 'main-benefits', 
                      'posts_per_page' => 1, 
                      'post_type' => 'post',
                      'post_status' => 'publish',
                      'paged' => get_query_var('paged')
                    );  
              $query = new WP_Query( $args );
                    if($query->have_posts() ) {
                          while ($query->have_posts() ) {
                                $query->the_post(); ?>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3><?php the_title(); ?></h3>
              <p>
                <?php the_content(); ?>
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <?php }
              }
              wp_reset_postdata();    
          ?>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
              <?php
                  $args = array(
                          'category_name' => 'benefits', 
                          'posts_per_page' => 3, 
                          'post_type' => 'post',
                          'post_status' => 'publish',

                          'paged' => get_query_var('paged')
                        );  
                  $query = new WP_Query( $args );
                        if($query->have_posts() ) {
                              while ($query->have_posts() ) {
                                    $query->the_post(); ?>
                <div class="col-xl-4 d-flex align-items-stretch"><!-- <i class="bx bx-receipt"></i> -->
                  <div class="icon-box mt-4 mt-xl-0">
                     <?php
                     echo do_shortcode(get_post_meta($post->ID,'benefits-icon',true));
                     ?>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                  </div>
                </div>
                <?php }
                    }
                    wp_reset_postdata();    
                ?>
              </div>
            </div><!-- End .content-->
          </div>
        </div>