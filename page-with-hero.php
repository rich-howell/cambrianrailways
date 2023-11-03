<?php /* Template Name: Page With Hero */ ?>
<?php

/**
 * The template for displaying pages using the featured image as the hero
 *
 *
 */ ?>

<?php get_header(); ?>

<main>

    <?php
    $hero_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
    if ($hero_url) {
        ?>

        <div class="template-hero-image" style="background-image: url('<?php echo($hero_url); ?>')">
        </div>

        <?php
    }
    ?>



        <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>


            <div class="row">
                <div class="col-12 py-4 text-center text-white" style="background-color:#9e8343">
                    <p class="fs-4 fw-bold"><?php the_title(); ?></p>
                </div>
            </div>

    <div class="container py-5">

            <div class="col-md-12">
                <div class="lc-block">
                    <div editable="rich">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
    </div>
        <?php endwhile;
        endif; ?>


</main>
<?php get_footer(); ?>