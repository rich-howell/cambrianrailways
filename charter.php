<?php /* Template Name: Charter */ ?>
<?php get_header(); ?>
<main>

<div class="charter-hero-image">
  </div>

  <div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#9e8343">
      <p class="fs-4 fw-bold">GROUP BOOKINGS AND CHARTER TRAINS</p>
    </div>   
  </div> 

  <div class="container mt-4">
        <div class="text-center">                           
        </div>
        <div class="col-md-12 col-lg-12  mt-4">
          <div class="row">
            <div class="col-md-4 align-self-center">
              <div class="lc-block border-top py-4" style="letter-spacing:10px">
                <div editable="rich">
                  <h2><strong>ABOUT OUR CHARTER SERVICE</strong></h2>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="lc-block">
                <div editable="rich">        
                  <p><strong>If your are part of a group ( minimum 15 people ) and you would like to book your own carriage, or indeed charter a train, then let us know your requirements and we will be very happy to work with you to meet, if possible, your requirements.</strong></p>
                </div>
              </div>
              <div class="lc-block">
                <div editable="rich">
                  <p>We can offer round trips from Oswestry to Weston Wharf and back, this can include light refreshments at Weston Wharf if required or, subject to availability, link in your journey with a visit to our neighbours at the Stonehouse Brewery.</p>                             
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  <div class="container py-2">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-3">
      <div class="col">                    
                  <img class="card-img-top"
                  src="<?php echo get_bloginfo('template_directory'); ?>/img/charter/1.png">                        
          </div>        
      <div class="col">                    
                  <img class="card-img-top"
                  src="<?php echo get_bloginfo('template_directory'); ?>/img/charter/2.png">                      
      </div>
      <div class="col">                    
                  <img class="card-img-top"
                  src="<?php echo get_bloginfo('template_directory'); ?>/img/charter/3.png">
      </div>
  </div><!-- ./Row-->
</div>  

    <!-- Booking Help section-->
    <div class="row mt-2 mb-2" style="background-color: lightgrey;">
        <div class="col-md-10 col-lg-8 mx-auto">
            <div class="lc-block py-5 text-center">
                <h2>Get In touch</h2>
                <p>To find out more about our Charter Train service, complete the form below or email your requirements to <a href="mailto:charter@cambrianrailways.com">charter@cambrianrailways.com</a>.</p>
                <div class="lc-block">
                <?php echo do_shortcode('[contact-form-7 id="14115" title="General Enquiries"]'); ?>
            </div>
            </div>
        </div><!-- /col -->
    </div>
    <!-- /Calendar section -->  

</main>
<?php get_footer(); ?>