<?php $layout_counter = $args['layout_counter']; ?>

<?php if( get_row_layout() == 'h1_hero' ): ?>

    <div class="container-fluid site-component-container h1-hero-container">
        <div class="row site-component-row h1-hero-row">
            <div id="carouselT1Indicator-<?php echo $layout_counter ?>" class="carousel slide hero-carousel carousel-fade" data-bs-ride="carousel">


                <div class="carousel-indicators">
                    <?php while(have_rows('hero_images')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselHeroIndicator-<?php echo $layout_counter ?>" class="<?php if(get_row_index() === 1) : ?>active<?php endif; ?>" data-bs-slide-to="<?php echo get_row_index() - 1 ?>" <?php if(get_row_index() === 1) : ?>aria-current="true"><?php endif; ?></button>
                    <?php endwhile; ?>
                </div>

                <div class="carousel-inner">
                    <?php while(have_rows('hero_images')) : the_row();
                        $image = get_sub_field('image');    
                    ?>
                        <div class="carousel-item <?php if(get_row_index() === 1): ?>active<?php endif; ?>">
                            <img src="<?php echo $image['url'] ?>" class="d-block w-100" alt="<?php echo $image['alt'] ?>">
                        </div>

                    <?php endwhile; ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselT1Indicator-<?php echo $layout_counter ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselT1Indicator-<?php echo $layout_counter ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </div>

<?php endif; ?>