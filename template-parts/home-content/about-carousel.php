<?php
            $args = array(
                      'posts_per_page'    => '1',
                      'post_type'         => 'about',
                      'post_status'       => 'publish',
                      'paged'             => get_query_var('paged')
                    );  
                    $query = new WP_Query( $args );
                          if($query->have_posts() ) {
                                while ($query->have_posts() ) {
                                      $query->the_post(); ?>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo get_post_meta($post->ID,'students',true); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo get_post_meta($post->ID,'courses',true); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo get_post_meta($post->ID,'events',true); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo get_post_meta($post->ID,'trainers',true); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>
        <?php }
            }
            wp_reset_postdata();
          ?>