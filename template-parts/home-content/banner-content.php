<div class="row">
           <div class="col-md-6">
              <?php
                $args = array(
                        'category_name' => 'banner-text', 
                        'posts_per_page' => 1, 
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'paged' => get_query_var('paged')
                      );  
                $query = new WP_Query( $args );
                      if($query->have_posts() ) {
                            while ($query->have_posts() ) {
                                  $query->the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <h2><?php the_content(); ?></h2>                              
                      <?php }
                      }
                      wp_reset_postdata();    
                      ?>
          <a href="courses.html" class="btn-get-started">Get Started</a>
           </div>
         </div>