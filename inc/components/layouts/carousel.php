<?php if( get_row_layout() == 'carousel_group' ): ?>

    <div class="container-fluid carousel-container site-component-container">
        <div class="owl-carousel owl-theme carousel-row row">

            <?php while(have_rows('carousel_slides')) : the_row(); 
                $image = get_sub_field('image');
                
            ?>
                    <?php while(have_rows('text_group')) : the_row(); 
                        $title = get_sub_field('title');
                        $snippet = get_sub_field('snippet');
                    ?>
                    <div class="item">
                        <div class="carousel-image-wrapper">
                            <img src="<?php echo $image['url'] ?>" />
                        </div>
                        <div class="snippet-wrapper">

                            <?php if($title) : ?>
                                <h3 class="title-text _48"><?php echo $title ?></h3>
                            <?php endif; ?>
                                
                            <?php if($snippet) : ?>
                                <div class="body-text _20">
                                    <?php echo $snippet ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endwhile; ?>
        </div>
    </div>

<?php endif; ?>