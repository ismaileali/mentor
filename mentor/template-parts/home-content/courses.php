<div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
            $args = array(
                'category_name'    => 'course',
                'posts_per_page'   => '3',
                'post_type'        => 'post',
                'post_status'      => 'publish',
                'paged'            => get_query_var( 'paged')

            );
            $query = new WP_Query( $args );   
                if($query->have_posts() ) {
                    global $post;
                    while ( $query->have_posts() ) {
                        $query->the_post();
              ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',['class' => 'img-fluid']); ?></a>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php echo get_post_meta($post->ID,'category',true); ?></h4>
                  <p class="price"><?php echo get_post_meta($post->ID,'price',true); ?></p>
                </div>

                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                  <?php the_content(); ?>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span><?php echo get_post_meta($post->ID,'trainers-name',true); ?></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php } 
              } 
              wp_reset_postdata(); 
          ?>
        </div>