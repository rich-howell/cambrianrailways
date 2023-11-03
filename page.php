<?php get_header(); ?> 
<main>
        <div class="container py-5">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
          <div class="row">
            <div class="col-md-12 align-self-center">                      
              <div class="text-center mb-4" editable="rich">
                  <h2><strong><?php the_title(); ?></strong></h2>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="lc-block">
                <div editable="rich">
                    <?php the_content(); ?>                    
                </div>
              </div>
            </div>
          </div>
            <?php endwhile;
            endif; ?>
        </div>
  </main>
  <?php get_footer(); ?> 