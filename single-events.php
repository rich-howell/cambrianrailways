<?php

/**
 * The template for displaying sing posts entries
 *
 *
 */ ?>

<?php get_header(); ?>

<div style="background-image: url(<?php the_field( 'event_hero_image' ); ?>); height: 400px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;"></div>

<div class="title pt-2 pb-2 text-center text-white fw-bold" style="background-color: #9e8343;">
    <span class="align-middle fs-3 text-uppercase"><?php the_title(); ?></span>
</div>

<div class="container">
    <main>
        <div class="py-5 text-center">
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <?php if(has_post_thumbnail()) { ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" class="bd-placeholder-img card-img-top"
                                width="100%" height="225">
                            <?php } else { ?>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/no-image-available.webp"
                                class="bd-placeholder-img card-img-top" width="100%" height="225">
                            <?php } ?>
                        </div>
                    </li>

                    
                    <li class="list-group-item d-flex justify-content-between lh-sm">                        
                        <div>
                            <h6 class="my-0">Adult Price:</h6>
                        </div>
                        
                        <span class="text-muted"><span
                                class="badge rounded-pill bg-secondary">£<?php the_field( 'adult_price' ); ?></span></span>
                    </li>
                    

                    
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Child Price:</h6>
                        </div>
                        <span class="text-muted"><span
                                class="badge rounded-pill bg-secondary">£<?php the_field( 'child_price' ); ?></span></span>
                    </li>
                    

                    
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Family Price:</h6>
                        </div>
                        <span class="text-muted"><span
                                class="badge rounded-pill bg-secondary">£<?php the_field( 'family_price' ); ?></span></span>
                    </li>
                   

                    
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Event Start Date:</h6>
                        </div>
                        <span class="text-muted"><?php the_field( 'event_start_date' ); ?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <a class="btn btn-sm btn-primary" href="#tickets">Book Your Tickets</a>
                        </div>
                        <span class="text-muted"></span>
                    </li>
                    
                </ul>
            </div>
            <div class="col-md-7 col-lg-8">
                <h2><?php the_title(); ?></h2>
                <p class="lead"><?php the_content(); ?></p>

                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="<?php the_field( 'youtube_event_link' ); ?>"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>


            </div>
        </div> <!-- End Of Main-->
</div>

<div class="mt-4 pt-3 pb-3" style="background-color: lightgray">
    <div class="container py-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="lc-block">
                    <div editable="rich">
                        <h2 class="pb-4 text-center">Frequently Asked Questions</h2>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Is there parking available?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Limited paid spaces are available at Oswestry station.</li>
                                            <li>There is a large pay and display car park in the town centre.</li>
                                            <li>There are no parking facilities at Weston Wharf station.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Do you offer refreshments?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Refreshments are available at Weston Wharf station.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingC">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseC" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Do you have toilets?
                                    </button>
                                </h2>
                                <div id="flush-collapseC" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingC" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Facilities (including disabled) are available at Oswestry and Weston
                                                Wharf.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingD">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseD" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Do your trains provide disabled access?
                                    </button>
                                </h2>
                                <div id="flush-collapseD" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingD" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>A ramp will be available to provide access for passengers with limited
                                                mobility.</li>
                                            <li>Wheelchair facilities are available.</li>
                                            <li>For more information, please see our <a
                                                    href="<?php echo get_option('home'); ?>/access-statement">Access
                                                    Statement</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Other questions.
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Journey time 10 minutes.</li>
                                            <li>Well behaved dogs are allowed.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- FAQ END-->
</div>

<?php
$images = get_field( 'event_gallery' );

if ( ! empty( $images ) ) { ?>

<div class="mt-4 pt-3 pb-3" style="background-color: #9e8343">
    <div class="container py-2">
        <?php 
         $count = 0;
         ?>
        <h2 class="pb-4 text-center text-white">Photo Gallery</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-3">
            <?php foreach ( $images as $image) {
            ?>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body shadow-sm">
                        <a href="<?php echo( esc_url( $image['url'] ) ); ?>">
                            <img class="card-img-top" src="<?php echo esc_url( $image['sizes']['thumbnail'] ); ?>"
                                alt="<?php echo esc_attr( $image['alt'] ); ?>">
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div><!-- ./Row-->
    </div>
</div>
<?php } ?>

<div id="tickets" class="container py-2">
    <div class="row">
        <div lc-helper="background" class="col-lg-12 order-lg-2" style="min-height: 45vh;">
            <pretix-widget event="<?php echo get_post_meta($post->ID, 'pretix_event_link', true); ?>"></pretix-widget>
            <noscript>
                <div class="pretix-widget">
                    <div class="pretix-widget-info-message">
                        JavaScript is disabled in your browser. To access our ticket shop without JavaScript, please
                        <a target="_blank" rel="noopener"
                            href="<?php echo get_post_meta($post->ID, 'pretix_event_link', true); ?>">click
                            here</a>.
                    </div>
                </div>
            </noscript>
        </div>      
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

<?php get_footer(); ?>