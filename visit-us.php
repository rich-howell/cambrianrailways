<?php /* Template Name: Visit Us */ ?>
<?php get_header(); ?>
<main>

    <div class="visit-us-hero-image">
    </div>

  <div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#9e8343">
      <p class="fs-4 fw-bold">Visit Us</p>
    </div>    
  </div>

    <div class="container py-5">
        <div class="text-center">
            <h2>Visit the Cambrian Heritage Railways</h2>
            <h3>A train journey back in time from the heart of Oswestry</h3>
        </div>
        <div class="row mt-5">
            <div class="col text-center mt-2">
                <a href="<?php echo get_option('home'); ?>/fares"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/fares.webp"></a>
            </div>
            <div class="col text-center mt-2">
                <a href="<?php echo get_option('home'); ?>/timetables"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/train-timetable.webp"></a>
            </div>
            <div class="col text-center mt-2">
                <a href="<?php echo get_option('home'); ?>/access-statement"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/accessibility.webp"></a>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col text-center mt-2">
                <a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/roster.webp"></a>
            </div>
            <div class="col text-center mt-2">
                <a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/events.webp"></a>
            </div> -->
            <div class="col text-center mt-2">   
                <a href="<?php echo get_option('home'); ?>/contact-us"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/contact-us.webp"></a>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>