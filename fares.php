<?php /* Template Name: Fares */ ?>
<?php get_header(); ?>
<main>

<div class="fares-hero-image">
</div>

  <div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#9e8343">
      <p class="fs-4 fw-bold">Fares</p>
    </div>    
  </div>

    <div class="container mt-4">
        <main>
            <div class="text-center">                   
                <p class="text-center"><strong>Below you can find a break down of our tickets and their
                        prices.</strong></p>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="lc-block text-center">
                        <div class="col-md-12">
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Ticket Type</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Child Single Ticket <br> Child Single tickets are for a single trip from Oswestry to Weston Wharf or Weston Wharf to Oswestry, if you are looking for a return ticket please select our Child Rover.</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Adult Single Ticket <br> Adult Single tickets are for a single trip from Oswestry to Weston Wharf or Weston Wharf to Oswestry, if you are looking for a return ticket please select our Adult Rover.</td>
                                        <td>£4</td>
                                    </tr>
                                    <tr>
                                        <td>Child Day Rover</td>
                                        <td>£5</td>
                                    </tr>
                                    <tr>
                                        <td>Adult Day Rover</td>
                                        <td>£8</td>
                                    </tr>
                                    <tr>
                                        <td>Family</td>
                                        <td>£20</td>
                                    </tr>
                                    <tr>
                                        <td>Concession Day Rover</td>
                                        <td>£7</td>
                                    </tr>
                                    <tr>
                                        <td>Concession Single</td>
                                        <td>£3.50</td>
                                    </tr>
                                    <tr>
                                        <td>Carer</td>
                                        <td>TBA</td>
                                    </tr>
                                    <tr>
                                        <td>Child Brewery Return Ticket</td>
                                        <td>£5</td>
                                    </tr>
                                    <tr>
                                        <td>Adult Brewery Return Ticket</td>
                                        <td>£6</td>
                                    </tr>
                                    <tr>
                                        <td>Family Brewery Return Ticket</td>
                                        <td>£15</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /col -->
            </div>

            <div class="container">
                <div class="alert alert-info">
                    <p class="text-center">Children under the age of two years travel free.</p>
                </div>
            </div>

            <div class="text-center mb-3">
                <a href="<?php echo get_option('home'); ?>/tickets" class="btn btn-primary">Book Your Tickets</a>
            </div>
            
    </div>

            </main>
            <?php get_footer(); ?>