<?php /* Template Name: Volunteers */ ?>
<?php get_header(); ?>
<main>

    <div class="vols-hero-image">
    </div>

    <div class="title pt-2 pb-2 text-center text-white fw-bold" style="background-color: #9e8343;">
        <span class="align-middle fs-3 text-uppercase">Volunteering with Cambrian Heritage Railways</span>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-2">
                    <p style="text-align: center;">The Cambrian Heritage Railway is run by a team of dedicated
                        volunteers who are working to preserve and protect the heritage infrastructure of the railway
                        and its associated buildings. To say that this is a big task is an understatement, and we are
                        always in need of dedicated people to help us grow the railway further and right the wrong which
                        was the closure of this superb line.</p>
                    <p style="text-align: center;">If you can spare just a few hours a month, we can't wait to welcome
                        you. Your time and effort mean a great deal to us, and the success of this railway.</p>
                    <p style="text-align: center;">If you would like to volunteer, you can let us know by filling in the
                        form below, or if you would prefer to use a paper copy, you can download the form here to print
                        off, and handed to our staff at one of our stations.</p>
                    <p style="text-align: center;">Thank you for your interest in our railway, and we hope to welcome
                        you in person to our volunteering team.</p>
                </div>
            </div>
        </div> <!-- ./Row -->
    </div>

    <!-- Review section-->
    <div class="row mt-4" style="background-color: lightgray;">
    <h2 class="text-center pt-2">Get In Touch</h2>
        <div class="col-md-10 col-lg-8 mx-auto">
            <div class="lc-block">
            <p class="lead">You can let us know that you’d like to volunteer either by using the online form, or by printing the volunteer application to fill in by hand.</p>
            <div class="text-center">
                <a href="#" class="btn btn-primary mb-2">Download Form To Print</a>
            </div>
            </div>
        </div><!-- /col -->
    
    <h3 class="text-center pt-2">Online Volunteer Registration Form</h3>    
        <div class="col-md-10 col-lg-8 mx-auto">
            <div class="lc-block">
            <?php echo do_shortcode('[contact-form-7 id="12940" title="Volunteer Contact Form"]'); ?>
            </div>
        </div><!-- /col -->
    </div>
    <!-- /review section -->

</main>
<?php get_footer(); ?>