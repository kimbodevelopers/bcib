<?php if( get_row_layout() == 'p5_single_image_carousel_group' ): ?>
    <div class="container-fluid p5-carousel-container site-component-container">
        <div class="p5-owl-carousel owl-carousel owl-theme p5-carousel-row row site-component-row">

            <?php while(have_rows('p5_carousel_slides')) : the_row(); 
                $image = get_sub_field('image');
                
            ?>
                    <?php while(have_rows('text_group')) : the_row(); 
                        $title = get_sub_field('title');
                        $snippet = get_sub_field('snippet');
                    ?>
                    <div class="item">
                        <div class="carousel-image-wrapper">
                            <img src="<?php echo $image['url'] ?>" />

                            <div class="snippet-wrapper">

                                <?php if($title) : ?>
                                    <h3 class="title-text _60"><?php echo $title ?></h3>
                                <?php endif; ?>
                                    
                                <?php if($snippet) : ?>
                                    <div class="body-text _20">
                                        <?php echo $snippet ?>
                                    </div>
                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endwhile; ?>
        </div>
    </div>

<?php endif; ?>