<div class="col">
    <div class="card shadow-sm">        
        <?php if( has_post_thumbnail() ) { ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>
" class="bd-placeholder-img card-img-top" width="100%" height="225">
        <?php } else { ?>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/no-image-available.webp"
            class="bd-placeholder-img card-img-top" width="100%" height="225">
        <?php } ?>
        <div class="card-body">
            <h3><?php the_title(); ?></h3> 
            Event Start Date: <?php the_field( 'event_start_date' ); ?>           
            <div class="d-flex justify-content-between align-items-center m-1">
                <button type="button" class="btn btn-sm btn-primary"
                    onclick="location.href='<?php the_permalink(); ?>'">Find Out More
                </button>
            </div>
        </div>
    </div>
</div>