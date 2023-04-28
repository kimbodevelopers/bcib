<?php if( get_row_layout() == 'p6_image_left_text_right_group' ): ?>
    <div class="container-fluid p6-image-text-container site-component-container">
        <?php while(have_rows('p6_image_text_row')) : the_row(); 
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $snippet = get_sub_field('snippet');

        ?>
            <div class="row p6-image-text-row site-component-row small">
                <div class="col-md-5">
                    <img src="<?php echo $image['url'] ?>" />
                </div>

                <div class="col-md-7">
                    <?php if($title) : ?>
                        <h3><?php echo $title ?></h3>
                    <?php endif; ?>

                    <?php if($subtitle) : ?>
                        <p><?php echo $subtitle ?></p>
                    <?php endif; ?>

                    <?php if($snippet) : ?>
                        <div><?php echo $snippet ?></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

<?php endif; ?>