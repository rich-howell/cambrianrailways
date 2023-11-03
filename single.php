<?php

/**
 * The template for displaying sing posts entries
 *
 *
 */ ?>

<?php get_header(); ?>

<div class="post-hero-image">
</div>


<div class="row">
    <div class="col-12 py-2 text-center text-white" style="background-color:#9e8343">
        <p class="fs-4 fw-bold"><?php the_title(); ?></p>
    </div>

    <div class="col-12 text-center text-white pt-3 pb-3 justify-content-center align-items-center" style="background-color: #4b493c;">
        <?php the_time('F j, Y'); ?> by <?php $username = get_userdata($post->post_author); ?>
            <?php echo $username->user_nicename; ?>
    </div>
</div>



<?php
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
if ($featured_image_url) {
?>

<div class="container mt-4">
    <div class="text-center">
    </div>
    <div class="col-md-12 col-lg-12 mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="lc-block py-4" style="letter-spacing:10px">
                    <div class="post-featured-image" style="background-image: url('<?php echo($featured_image_url); ?>')">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="lc-block">
                    <div editable="rich">
                        <article class="blog-post">
                            
                            <?php the_content(); ?>

                            <a class="btn btn-primary" href="<?php echo get_option('home'); ?>/news">Back To News</a>

                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php } ?>
<?php get_footer(); ?>


