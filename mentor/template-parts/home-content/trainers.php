<div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
            $args = array(
                    'category_name'   => 'trainers',
                    'posts_per_page' => 3, 
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'paged' => get_query_var('paged')
                  );  
            $query = new WP_Query( $args );
                  if($query->have_posts() ) {
                        while ($query->have_posts() ) {
                              $query->the_post(); ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <?php the_post_thumbnail('', ['class'=> 'img-fluid', 'title' => 'Trainers Image']); ?>
              <div class="member-content">
                <h4><?php the_title(); ?></h4>
                <span><?php echo get_post_meta($post->ID,'trainers-category',true); ?></span>
               
                  <?php the_content(); ?>
          
                <div class="social">
                  <a href="<?php echo get_post_meta($post->ID,'trainers-facebook',true); ?>"><i class="bi bi-twitter"></i></a>
                  <a href=" "><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php }
            }
            wp_reset_postdata();       
        ?>
        </div>