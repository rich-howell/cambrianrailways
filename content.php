<div class="col">
<div class="card shadow-sm">
    <?php if( has_post_thumbnail() ) { ?>
    <img src="<?php the_post_thumbnail_url(); ?>" class="bd-placeholder-img card-img-top" width="100%" height="225">    
    <?php } else { ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/no-image-available.webp" class="bd-placeholder-img card-img-top" width="100%" height="225"> 
    <?php } ?>
    <div class="card-body">
        <h3><?php the_title(); ?></h3>
        <p class="card-text"><? the_excerpt() ?></p>
        <div class="d-flex justify-content-between align-items-center">        
        <a class="btn btn-sm btn-primary" id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">Read More</a>            
        </div>
    </div>
</div>
</div>