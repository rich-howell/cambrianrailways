<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>
<main>

<div class="contact-hero-image">
  </div>

  <div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#9e8343">
      <p class="fs-4 fw-bold">Contact Us</p>
    </div>    
  </div>

<div class="container-fluid px-5 my-5">
      <div class="row justify-content-center">
        <div class="col-xl-10">
              <div class="row g-0">
                <div class="col-sm-6 p-4">
                <div class="row mt-2">
                  <div class="fw-bold">General Enquiries:</div><a href="mailto:info@cambrianrailways.co.uk">info@cambrianrailways.co.uk</a>
                </div>  
                <div class="row mt-2">
                  <div class="fw-bold">Driver Experience:</div><a href="mailto:DATEX@cambrianrailways.com">DATEX@cambrianrailways.com</a>
                </div>
                <div class="row mt-2">
                  <div class="fw-bold">Phone:</div> <a href="tel:01691 728131">01691 728131</a> 
                  <p>(Transferred to a mobile as we do not have a staffed office.)</p>
                </div>   
                <div class="row mt-2">
                  <div class="fw-bold">Write To Us:</div>
                  <p>Cambrian Heritage Railways,</p>
                  <p>Old Station Building, Oswald Road,</p>
                  <p>Oswestry, Shropshire,</p>
                  <p>SY11 1RE</p>
                </div>                   
                </div>
                <div class="col-sm-6 p-4">
                  <div class="text-center">
                    <div class="h3 fw-light">Contact Us</div>
                  </div>
                  <? echo do_shortcode('[contact-form-7 id="14910" title="General Enquiries"]');?>
                </div>
              </div>    
        </div>
      </div>
    </div>

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