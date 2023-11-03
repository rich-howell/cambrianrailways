<!doctype html>
<html lang="en">

<head>
    <!-- Google tag Start (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VSXDHG2EE1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-VSXDHG2EE1');
    </script>
    <!-- Google tag End (gtag.js) -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/jpg"
          href="<?php echo get_bloginfo('template_directory'); ?>/img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <script src="https://kit.fontawesome.com/9097ac21a7.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>
<div id="header-body">
    <nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid flex-lg-column">
            <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><img
                        src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.webp"
                        alt="Cambrian Heritage Railways Logo" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse justify-content-center navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav nav-pills py-3 mt-2">
                    <li class="nav-item"><a href="<?php echo get_option('home'); ?>" class="nav-link active"
                                            aria-current="page">Home</a></li>
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside">Visit Us</a>
                        <div class="dropdown-menu shadow">
                            <div class="mega-content px-4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-md-3 pt-3 border-seperator">
                                            <h5 class="fw-bold">What To Do</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="<?php echo get_option('home'); ?>/train-rides">Train
                                                        Rides</a></li>
                                                <li><a href="<?php echo get_option('home'); ?>/heritage-open-days-2023">Heritage Open Day 2023</a></li>
                                                <li><a href="<?php echo get_option('home'); ?>/museum">Museum</a>
                                                </li>
                                                <li><a
                                                            href="<?php echo get_option('home'); ?>/drive-a-train-experience">Drive
                                                        A Train Experience</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-3 pt-4 border-seperator">
                                            <h5 class="fw-bold">Timetables</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="<?php echo get_option('home'); ?>/timetables">Train
                                                        Timetables</a></li>
                                                <li><a href="<?php echo get_option('home'); ?>/fares">Fares</a></li>
                                                <!-- <li><a href="#">Locomotive Roster</a></li> -->
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-3 pt-3 border-seperator">
                                            <h5 class="fw-bold">Food & Drink</h5>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="<?php echo get_option('home'); ?>/station-buffet">The
                                                        Station Buffet</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo get_option('home'); ?>/stonehouse">The
                                                        Stonehouse Brewery</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo get_option('home'); ?>/weston-village">Weston
                                                        Pools Village</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-3 pt-3">
                                            <h5 class="fw-bold">How To Find Us</h5>
                                            <ul class="list-unstyled">
                                                <li><a
                                                            href="<?php echo get_option('home'); ?>/find-us-oswestry">Oswestry</a>
                                                </li>
                                                <li><a
                                                            href="<?php echo get_option('home'); ?>/find-us-weston-wharf">Weston
                                                        Wharf</a></li>
                                                <li><a
                                                            href="<?php echo get_option('home'); ?>/find-us-llynclys">Llynclys</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--<?php
                    $args = array(
                        'category_name' => 'current-event',
                        'post_type' => 'events'
                    );
                    $postTypes = new WP_Query($args);
                    $numberOfPosts = $postTypes->found_posts;
                    if ($numberOfPosts > 0) { ?>
                        <li class="nav-item"><a href="<?php echo get_option('home'); ?>/whats-on"
                                                class="nav-link text-white">What's On</a></li>
                    <?php } ?>-->
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside">Support Us</a>
                        <div class="dropdown-menu shadow">
                            <div class="mega-content px-4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-md-6 pt-4 border-seperator">
                                            <h5 class="fw-bold">Donate</h5>
                                            <ul class="list-unstyled">
                                                <li><a
                                                            href="<?php echo get_option('home'); ?>/donations">Donations</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6 pt-4 border-seperator">
                                            <h5 class="fw-bold">Join Us</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="<?php echo get_option('home'); ?>/memberships">Become a
                                                        member</a></li>
                                                <li><a href="<?php echo get_option('home'); ?>/volunteering">Become
                                                        a volunteer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside">Discover More</a>
                        <div class="dropdown-menu shadow">
                            <div class="mega-content px-4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-md-3 pt-4 border-seperator">
                                            <h5 class="fw-bold">About Us</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="<?php echo get_option('home'); ?>/about-us">About our
                                                        railway</a></li>
                                                <li><a href="<?php echo get_option('home'); ?>/news">Latest News</a>
                                                </li>
                                                <li><a href="<?php echo get_option('home'); ?>/rolling-stock">Rolling
                                                        Stock</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-3 pt-4 border-seperator">
                                            <h5 class="fw-bold">Other Links</h5>
                                            <ul class="list-unstyled">
                                                <li><a
                                                            href="<?php echo get_option('home'); ?>/news-letters">Newsletters</a>
                                                </li>
                                                <li><a
                                                            href="<?php echo get_option('home'); ?>/crop-the-railways-orchard">CROP
                                                        Our Orchard</a></li>
                                                <li><a
                                                            href="<?php echo get_option('home'); ?>/cambrian-heritage-railways-book-collection">CHR
                                                        Railway Book Collection</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-3 pt-4">
                                            <h5 class="fw-bold">Get In Touch</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="/contact-us">Contact Us</a></li>
                                                <li><a
                                                            href="https://www.facebook.com/cambrianheritagerailways/"
                                                            target="_blank">Facebook</a>
                                                </li>
                                                <li><a
                                                            href="https://www.instagram.com/cambrianheritagerailways/"
                                                            target="_blank">Instagram</a>
                                                </li>
                                                <li><a href="https://twitter.com/cambrianchr"
                                                       target="_blank">Twitter</a></li>
                                                <li><a
                                                            href="https://www.youtube.com/channel/UCo9VxkpDKZtcG-LoMXoJtYA"
                                                            target="_blank">YouTube</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a href="<?php echo get_option('home'); ?>/tickets"
                                            class="nav-link text-white hero">Buy Tickets</a></li>
                </ul>

            </div>
        </div>
    </nav>
</div>
<div class="news-banner pt-2 pb-2 justify-content-center">
    <div id="news-text">
        Trains now running | There is no parking available at our Weston Wharf Station. 
    </div>

</div>