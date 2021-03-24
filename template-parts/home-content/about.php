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
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <?php the_post_thumbnail('', ['class'=> 'img-fluid', 'title'=> 'About Image']); ?>
          </div> 
          
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php the_title(); ?></h3>

                     <?php the_content(); ?>

          </div>
        </div>
        <?php }
            }
            wp_reset_postdata(); 
        ?>