

<?php if( get_row_layout() == 't3_tabs_group' ): ?>

    <?php $layout_counter = $args['layout_counter'] ?>

    <div class="container-fluid site-component-container t3-container">

        <div class="row site-component-row t3-row small">
            <div class="col-12 t3-column">

                <div class="tabs">

                    <div id="tabs-nav-<?php echo $layout_counter ?>" class="tabs-nav row site-component-row">

                        <?php $counter = 0; ?>

                        <?php while(have_rows('tab_items')) : the_row(); $counter++; ?><?php endwhile; ?>

                        <?php $column_num = null; ?>

                        <?php if($counter === 1 || $counter === 2 || $counter === 3) : ?>
                            <?php $column_num = 'col-md-4 col-sm-6'; ?>
                        <?php elseif($counter === 4) : ?>
                            <?php $column_num = 'col-md-3 col-sm-6'; ?>
                        <?php elseif($counter === 5 || $counter === 6) : ?>
                            <?php $column_num = 'col-md-2 col-sm-6'; ?>
                        <?php endif; ?>

                        <?php while(have_rows('tab_items')) : the_row();
                            $title = get_sub_field('title');
                            $title_replaced = str_replace(array(' ', '.'), '-', $title);
                        ?>
                        
                            <div class="tab-item <?php echo $column_num; ?>
                                <?php if(get_row_index() === 1) : ?>active<?php endif; ?>
                                ">
                                <a class="body-text _17" href="#tab-<?php echo $args['layout_counter'] ?>-<?php echo get_row_index() ?>">
                                    <?php echo $title; ?>
                                </a>
                            </div>
                            
                        <?php endwhile; ?>

                    </div>

                    <div id="tabs-content" >
                    
                        <?php while(have_rows('tab_items')) : the_row();
                            $title = get_sub_field('title');
                            $title_replaced = str_replace(array(' ', '.'), '-', $title);
                            $content = get_sub_field('content');
                            $images = get_sub_field('gallery');
                            $media_option = get_sub_field('media_option');
                            $video = get_sub_field('video');
                            $indicator_index = 1;
                            $image_index = 1;

                        ?>
                            <div id="tab-<?php echo $args['layout_counter'] ?>-<?php echo get_row_index() ?>" class="tab-content tab-content-<?php echo $args['layout_counter'] ?> row">
                                
                                    <div class="body-text  <?php if($media_option === 'none') : ?>col-md-9 <?php else : ?> col-md-6  <?php endif; ?>">
                                        <?php echo $content; ?>
                                    </div>

                                    <?php if($media_option === 'gallery') : ?>

                                        <?php if($images) : ?>

                                            <div id="carouselT3Indicator-<?php echo get_row_index() ?>" class="carousel slide col-md-6 gallery-column" data-bs-ride="carousel">

                                                <?php if(count($images) > 1) : ?>
                                                    <div class="carousel-indicators">
                                                        <?php foreach($images as $image) : ?>
                                                            <button type="button" data-bs-target="#carouselT3Indicator-<?php echo get_row_index() ?>" class="<?php if($indicator_index === 1) : ?>active<?php endif; ?>" data-bs-slide-to="<?php echo $indicator_index -1 ?>" <?php if($indicator_index === 1) : ?>aria-current="true"><?php endif; ?></button>
                                                            <?php $indicator_index++; ?>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="carousel-inner">
                                                    <?php foreach($images as $image) : ?>
                                                        <div class="carousel-item <?php if($image_index === 1) : ?>active<?php endif; ?>">

                                                            <img class="d-block w-100" src="<?php echo esc_url($image['url']); ?>" />
                                                        </div>

                                                    <?php $image_index++  ?>
                                                    <?php endforeach; ?>
                                                </div>


                                                <?php if(count($images) > 1) : ?>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselT3Indicator-<?php echo get_row_index() ?>" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselT3Indicator-<?php echo get_row_index() ?>" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                <?php endif; ?>

                                            </div>



                                        <?php endif; ?>

                                    <?php endif; ?>

                                    <?php if($media_option === 'video') : ?>
                                        <div class="col-md-6 video-column">
                                            <video autoplay controls src="<?php echo $video ?>"></video>

                                        </div>

                                    <?php endif; ?>
                        
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
        
            </div>
        </div>
    </div>

    <script>

        $('#tabs-nav-<?php echo $layout_counter ?> li:first-child').addClass('active');
        $('.tab-content-<?php echo $layout_counter ?>').hide();
        $('.tab-content-<?php echo $layout_counter ?>:first').show();

        // Click function
        $('#tabs-nav-<?php echo $layout_counter ?> .tab-item').click(function(){
            $('#tabs-nav-<?php echo $layout_counter ?> .tab-item').removeClass('active');
            $(this).addClass('active');
            $('.tab-content-<?php echo $layout_counter ?>').hide();

            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn();
            return false;
        });
</script>

<?php endif; ?>

