<div class="col-md-4 col-12 c4-medium-card">
    <a href="<?php if($link) : ?><?php echo $link ?><?php else : ?><?php the_permalink(); ?><?php endif; ?>">
        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0] ?>">
        
        <div class="content-wrapper">
            <h4 class="date _14 body-text _semibold"><?php echo get_the_date(); ?></h4>

            <h3 class="title _32 title-text _medium _white"><?php the_title(); ?></h3>
            
            <div class="content _16 body-text _white">

             <?php $short_content = substr(get_the_content(), 0, 200); ?>
                <?php echo $short_content; ?>
            </div>
        </div>

    </a>
</div>