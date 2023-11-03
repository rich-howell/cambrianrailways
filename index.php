<?php get_header(); ?>
<main>


    <!-- <div class="px-4 py-5 text-center home-hero-image mt-4" style="background-color: #d3d3d3">        
        <div class="col-lg-6 mx-auto">
            <h2>When we are next open</h2>
        <p class="lead mb-4">Our next train service will be running on 14/05/2023.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-sm px-4 gap-3">See our timetable for more information</button>          
        </div>
        </div>
    </div> -->

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
            <a href="<?php echo get_option('home'); ?>/heritage-open-days-2023"><img class="img-fluid" alt="Visit Us" src="<?php echo get_bloginfo('template_directory'); ?>/img/hod-banner.png"></a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="container d-flex align-items-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-dark">
                        <img class="card-img-top" alt="Ticket Office" src="<?php echo get_bloginfo('template_directory'); ?>/img/tickets.webp">
                        <div class="card-body text-center">
                            <h3 class="card-title mb-1" editable="inline">Buy Tickets</h3>
                            <p class="card-text" editable="inline">Buy tickets to ride the train at Cambrian Heritage Railways.</p>
                            <a class="btn btn-primary stretched-link"
                                href="<?php echo get_bloginfo('template_directory'); ?>/tickets" role="button">Get Tickets Here</a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <div class="col-md-4">
                    <div class="card text-dark">
                        <img class="card-img-top" alt="Visit Us" src="<?php echo get_bloginfo('template_directory'); ?>/img/visit.webp">
                        <div class="card-body text-center">
                            <h3 class="card-title mb-1" editable="inline">Visit Us</h3>
                            <p class="card-text" editable="inline">Find out how you can find us, our timetables and much
                                more. </p>
                            <a class="btn btn-primary stretched-link" href="<?php echo get_option('home'); ?>/visit-us" role="button">Find out more</a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <?php 
                $args = array(
                    'category_name'=>'current-event',
                    'post_type'=>'events'
                    );
                    $postTypes = new WP_Query($args);
                    $numberOfPosts=$postTypes->found_posts;
                if ( $numberOfPosts > 0 ) { ?>
                <div class="col-md-4">
                    <div class="card text-dark">
                        <img class="card-img-top" alt="What's On"
                            src="<?php echo get_bloginfo('template_directory'); ?>/img/what-on.webp">
                        <div class="card-body text-center">
                            <h3 class="card-title mb-1" editable="inline">What's On</h3>
                            <p class="card-text" editable="inline">Find out what events are upcoming at Cambrian
                                Heritage Railways.</p>
                            <a class="btn btn-primary stretched-link" href="<?php echo get_option('home'); ?>/whats-on"
                                role="button">See our upcoming events</a>
                        </div>
                    </div>
                    <!-- /lc-block -->
                </div>
                <?php } else { ?>
                    <div class="col-md-4">
                    <div class="card text-dark">
                        <img class="card-img-top" alt="What's On"
                            src="<?php echo get_bloginfo('template_directory'); ?>/img/what-on.webp">
                        <div class="card-body text-center">
                            <h3 class="card-title mb-1" editable="inline">What's On</h3>
                            <p class="card-text" editable="inline">We don't have any events coming up right now, we will be adding more soon.</p>
                            <p class="card-text" editable="inline">Please check back later.</p>
                        </div>
                    </div>
                    <!-- /lc-block -->
                </div>
                <?php } ?>
                <!-- /col -->                
            </div>
        </div>
    </div>

    <div class="container py-5">       

        <div class="row">
            <div class="col-md-4 align-self-center">
                <div class="lc-block border-top py-4" style="letter-spacing:10px">
                    <div editable="rich">
                        <h2><strong>About Cambrian Heritage Railways</strong></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="lc-block">
                    <div editable="rich">
                        <p><strong>Cambrian Heritage Railways is based at the heart of the historic market town of
                                Oswestry and within walking distance of the town centre, market, castle, town museum and
                                other local amenities. Our Oswestry station boasts a railway museum, restored signal box
                                (only open on selected days), period ticket office and waiting room, shop to support the
                                railway, toilets and visitor parking, this is the start of your journey through
                                time!</strong></p>
                    </div>
                </div>
                <div class="lc-block">
                    <div editable="rich">

                        <p>Our heritage trains operate on selected days using Steam, Vintage Diesel or Diesel Multiple
                            Units, our newest item of stock is over 36 years old! Trains operate between Oswestry and
                            Weston Wharf (NO visitor parking) and the journey takes you through the suburbs of Oswestry
                            and onward to views of open field before arrival at Weston Wharf 1 3/4 miles to the south.
                        </p>


                    </div>
                </div>
                <div class="lc-block">
                    <div editable="rich">
                        <p>At Weston Wharf CHR have created a period station based around this historic good transfer
                            station, facilities now include a period waiting room, Toilets, “Snacks on Tracks” cafe,
                            picnic area and displays of railway artifacts. You can also chose to explore the local Morda
                            valley area with its rich industrial heritage or visit the adjacent Stone House Brewery. CHR
                            also operate on a limited range of dates a separate site at Llynclys South station. It is
                            our eventual aim to connect to this site creating a 5 mile heritage line. CHR tickets are
                            all “Rovers” meaning you can travel as many times as you like throughout the day!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <h1 class="text-center">What's On</h1>
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

    <div class="container">
        <div class="row mt-4">
            <h1 class="text-center">Latest News</h1>

            <?php 
            $category = get_category( 162 );  // <- change the ID of category

            if ( $category->category_count > 0 ) { ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php if ( have_posts()) {?>
            <?php $args = array(
                'category_name'      => 'news',
                'posts_per_page' => 3,                
                'order'          => 'desc',
                'orderby'        => 'publish_date'
                
              );
              $latest = new WP_Query( $args );
              if ( $latest->have_posts() ) :  while ( $latest->have_posts() ) : $latest->the_post(); 
                get_template_part( 'content-news', get_post_format() );
                    endwhile; endif; wp_reset_postdata(); 
            ?>
            <?php } ?>
        </div>
        <?php } else { ?>
            <p class="lead mt-2 alert alert-warning text-center">We don't currently have any news to display.</p>
        <?php } ?>
        </div>
    </div>

    <!-- Review section-->
    <div class="row mt-4" style="background-color: lightgrey;">
        <div class="col-md-10 col-lg-8 mx-auto">
            <div class="lc-block py-5 text-center">
                <div id="carouselTestimonial" class="carousel slide pb-4" data-bs-ride="carousel">
                    <div class="carousel-inner px-5">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="lc-block">
                                    <div editable="rich">
                                        <p class="rfs-8 text-muted">"We went on the santa train on Saturday 17th
                                            December. The children had a magical time. Sadly my son was poorly at the
                                            station so we didn't get to finish off our trip. The staff there looked
                                            after him and us all amazingly and the aftercare has also been amazing! We
                                            can not thank you all enough for being so kind and thoughtful. We can't wait
                                            to come back in the spring for more fun!"</p>
                                    </div>
                                </div>
                                <div class="lc-block">
                                    <div class="lc-block d-inline-flex">
                                        <div class="lc-block">
                                            <div editable="rich">
                                                <p class="h5">bryonym152</p>
                                                <p class="text-muted">19th Dec 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="lc-block">
                                    <div editable="rich">
                                        <p class="rfs-8">"We went on the Easter train ride today two adults two children . With two children in special buggy’s the staff were wonderful with us so kind and helpful we had a lovely time on the train, hunting for clues and then then children collecting an Easter egg each. We will be back again !"</p>
                                    </div>
                                </div>
                                <div class="lc-block">
                                    <div class="lc-block d-inline-flex">
                                        <div class="lc-block">
                                            <div editable="rich">
                                                <p class="h5">T4492RHjoanned</p>
                                                <p class="text-muted">8th Apr 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators position-relative mt-3">
                        <li data-bs-target="#carouselLogos" data-bs-slide-to="0"
                            class="active bg-dark carousel-control-prev-icon"></li>
                        <li data-bs-target="#carouselLogos" data-bs-slide-to="1" class="bg-dark"></li>
                    </ol>
                    <div class="w-100 text-center mt-3">
                        <a class="carousel-control-prev position-relative d-inline me-4" href="#carouselTestimonial"
                            data-bs-slide="prev">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="text-dark" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                                </path>
                            </svg>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next position-relative d-inline" href="#carouselTestimonial"
                            data-bs-slide="next">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="text-dark" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- /col -->
    </div>
    <!-- /review section -->

    <!-- Social Media-->
    <div class="row text-center pt-2 pb-2" style="background-color: #9e8343; color: #fff; font-size: 2rem;">
        <div class="col-sm-6 col-lg-3">
            <div class="lc-block">
                <a class="link-light" alt="Facebook" target="_blank" href="https://www.facebook.com/cambrianheritagerailways">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </div>
        </div>
        <!-- /col -->
        <div class="col-sm-6 col-lg-3">
            <div class="lc-block">
                <a class="link-light" alt="Twitter" target="_blank" href="https://www.twitter.com/cambrianchr">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </div>
        <!-- /col -->
        <div class="col-sm-6 col-lg-3">
            <div class="lc-block">
                <a class="link-light" alt="Instagram" target="_blank" href="https://www.instagram.com/cambrianheritagerailways/">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            <!-- /lc-block -->
        </div>
        <!-- /col -->
        <div class="col-sm-6 col-lg-3">
            <div class="lc-block">
                <a class="link-light" alt="YouTube" target="_blank" href="https://www.youtube.com/channel/UCo9VxkpDKZtcG-LoMXoJtYA">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
            <!-- /lc-block -->
        </div>
        <!-- /col -->
    </div>
    <!-- /social media-->

</main>
<?php get_footer(); ?>