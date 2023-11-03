<?php /* Template Name: What's On */ ?>
<?php get_header(); ?>
<main>

    <div class="hero-image">
    </div>

  <div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#9e8343">
      <p class="fs-4 fw-bold">Events</p>
    </div>    
  </div>    

    <div class="album py-5 bg-light">
        <div class="container">
            <?php 
            $category = get_category( 161 );  // <- change the ID of category

            if ( $category->category_count > 0 ) { ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php if ( have_posts()) {?>
            <?php $args = array(
                'category_name'      => 'current-event',
                'post_type'     => 'events',
                'order'          => 'desc',
                'orderby'        => 'publish_date'
              );
              $latest = new WP_Query( $args );
              if ( $latest->have_posts() ) :  while ( $latest->have_posts() ) : $latest->the_post(); 
                get_template_part( 'content-event', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
            ?>
            <?php } ?>
        </div>
        <?php } else { ?>
            <div class="alert alert-warning"><strong>Notice to Customers</strong> - There are no trains running at the moment.
Services will start again soon. Please check back for updates.</div>
        <?php } ?>
    </div>
    </div>

    <!-- Booking Help section-->
    <div class="row mt-2" style="background-color: lightgrey;">
        <div class="col-md-10 col-lg-8 mx-auto">
            <div class="lc-block py-5 text-center">
                <h2>Need some help with your booking?</h2>
                <p>Contact our customer service team who will be more than happy to help with your enquiry</p>
                <a href="<?php echo get_option('home'); ?>/contact-us" class="btn btn-lg btn-primary">Contact Us</a>
            </div>
        </div><!-- /col -->
    </div>
    <!-- /Calendar section -->

</main>
<?php get_footer(); ?>