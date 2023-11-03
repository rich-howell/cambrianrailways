<?php /* Template Name: Get Tickets */ ?>
<?php get_header(); ?>
<main>

<div class="timetables-hero-image"></div>

    <div class="row">
        <div class="col-12 py-4 text-center text-white" style="background-color:#9e8343">
            <p class="fs-4 fw-bold">Tickets</p>
        </div>    
    </div> 
    

<div class="container mt-4 text-center">
    <h2 class="mb-4">Departure Station</h2>
    <p>Select the station you intend on departing from</p>
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Oswestry" aria-expanded="false" aria-controls="Oswestry">
            Oswestry Station
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#WestonWharf" aria-expanded="false" aria-controls="WestonWharf">
            Weston Wharf Station
        </button>
    </p>
    <div class="collapse" id="Oswestry">   
        <h2 class="text-center">Oswestry Station</h2>
        <div class="row">
            <div lc-helper="background" style="min-height: 45vh;">
                <pretix-widget event="https://chr-tickets.cre8.org.uk/CHR/" filter="attr[Station]=Oswestry&attr[Type]=New"></pretix-widget>
                <noscript>
                    <div class="pretix-widget">
                        <div class="pretix-widget-info-message">
                            JavaScript is disabled in your browser. To access our ticket shop without JavaScript, please
                            <a target="_blank" rel="noopener" href="https://chr-tickets.cre8.org.uk/CHR/">click
                                here</a>.
                        </div>
                    </div>
                </noscript>
            </div>
        </div>   
    </div>
    <div class="collapse mt-4" id="WestonWharf">   
        <h2 class="text-center">Weston Wharf Station</h2>
        <div class="alert alert-info">There is no parking available at Weston Wharf, if you intend to drive to the railway it is recommended you depart from <a class="btn btn-primary" data-bs-toggle="collapse" href="#Oswestry" role="button" aria-expanded="false" aria-controls="Oswestry">Oswestry</a></div>
        <div class="row">
            <div lc-helper="background" style="min-height: 45vh;">
                <pretix-widget event="https://chr-tickets.cre8.org.uk/CHR/" filter="attr[Station]=Weston-Wharf&attr[Type]=New"></pretix-widget>
                <noscript>
                    <div class="pretix-widget">
                        <div class="pretix-widget-info-message">
                            JavaScript is disabled in your browser. To access our ticket shop without JavaScript, please
                            <a target="_blank" rel="noopener" href="https://chr-tickets.cre8.org.uk/CHR/">click
                                here</a>.
                        </div>
                    </div>
                </noscript>
            </div>
        </div>      
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.btn').click(function() {
            var target = $(this).data('bs-target');
            $('.collapse').not(target).collapse('hide');
        });
    });
</script>

    <div class="row mt-2 mb-2" style="background-color: lightgrey;">
        <div class="col-md-12 mx-auto">            
            <div class="container">
                <div class="row">
                    <?php 
                    $args = array(
                    'category_name'=>'current-event',
                    'post_type'=>'events'
                    );
                    $postTypes = new WP_Query($args);
                    $numberOfPosts=$postTypes->found_posts;    
                    if ( $numberOfPosts > 0 ) { ?>
                        <h2 class="text-center mt-4">What's On</h2>
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
                    <p class="lead mt-2 alert alert-warning text-center">We don't currently have any upcoming events...please
                        check back soon</p>
                    <?php } ?>
                </div>
            </div>            
        </div>
    </div>

    <div class="container my-2 mt-4">
    <h2 class="text-center">Our Operational Timetable</h2>
        <div class="row d-none d-sm-block">
                <div class="col-md-12">
                    <div class="mt-2 text-center">
                        <img alt="operating-timetable" class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/operating-timetable-2023.png">
                    </div>
                </div>
            </div>
            <div class="row d-block d-sm-none">
                <div class="col-md-12">
                    <div class="mt-2 text-center">
                        <a href="<?php echo get_bloginfo('template_directory'); ?>/img/operating-timetable-2023.png" target="_blank" class="btn btn-primary">View Our Operating Timetable</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    

  <div class="container py-2 mt-4">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <div class="lc-block py-4">
                    <div editable="rich">
                        <h2 class="text-center">Our Running Timetable</h2>
                        <div class="lc-block">
                    <div editable="rich">        
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                        Main Timetable
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?php include get_template_directory() . '/timetables/timetable-a-red.php'; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                        Wednesday Timetable
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?php include get_template_directory() . '/timetables/timetable-b-yellow.php'; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingC">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseC" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Friday/Saturday Evening Timetable
                                    </button>
                                </h2>
                                <div id="flush-collapseC" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingC" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?php include get_template_directory() . '/timetables/timetable-c-blue.php'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>    
   

      <!-- Booking Help section-->
      <div class="row mt-2" style="background-color: lightgrey;">
          <div class="col-md-10 col-lg-8 mx-auto">
              <div class="lc-block py-5 text-center">
                  <h2>Need some help with your booking?</h2>
                  <p>Contact our customer service team who will be more than happy to help with your enquiry</p>
                  <a href="<?php echo get_option('home'); ?>/contact-us"
                      class="btn btn-lg btn-primary">Contact Us</a>
              </div>
          </div>
      </div>
      <!-- /Calendar section -->
  
  </main>
<?php get_footer(); ?>