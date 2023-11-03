<?php /* Template Name: Latest News */ ?>
<?php get_header(); ?>
<main>

<div class="post-hero-image">
  </div>

  <div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#9e8343">
      <p class="fs-4 fw-bold">Latest News</p>
    </div>    
  </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);

$args = array(
    'category_name' => 'News',
    'post_status' => 'publish',
    'posts_per_page' => 6,
    'order' => 'DESC',
    'orderby' => 'date',
    'paged' => $paged
);

$loop = new WP_Query($args);
if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();
        get_template_part('content', get_post_format());
    endwhile; ?>
</div>
    <?php bootstrap_pagination($loop);
endif;

wp_reset_postdata();?>
            
        </div>
    </div>   
</main>
<?php get_footer(); ?>