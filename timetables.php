<?php /* Template Name:Timetables */ ?>
<?php get_header(); ?>
<main>

    <div class="timetables-hero-image"></div>

  <div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#9e8343">
      <p class="fs-4 fw-bold">Timetables</p>
    </div>
  </div>    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-2">
                    <p style="text-align: center;">The timetables for our running days are listed below. These are
                        standard timetimes which will be in use on standard running days, and on some special events.
                        When relevant, special event timetables will be in use and these will be shown on the page for
                        the event itself. You can see our special events on the Events page.</p>
                    <p style="text-align: center;">Our best value tickets are ‘day rovers’ so should you
                        wish to visit any local attractions, such as Stonehouse Brewery or Weston Pools Village you are
                        able to return to Oswestry on any of the trains available on that day.</p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mt-2 text-center">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/operating-timetable-2023.png">
                </div>
            </div>

            <div class="col-md-12">
                <div class="mt-4">
                    <h3 class="text-center">Main Timetable</h3>
                    <?php include 'timetables/timetable-a-red.php';?>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mt-2">
                    <h3 class="text-center">Wednesday Timetable</h3>
                    <?php include 'timetables/timetable-b-yellow.php';?>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mt-2">
                    <h3 class="text-center">Friday/Saturday Evening Timetable</h3>
                    <?php include 'timetables/timetable-c-blue.php';?>
                </div>
            </div>

        </div> <!-- ./Row -->
    </div>
</main>
<?php get_footer(); ?>