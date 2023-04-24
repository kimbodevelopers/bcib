<?php if( get_row_layout() == 'p2b_group_alternating_text_image' ): ?>
    <div class="container-fluid site-component-container p2-picture-text-container picture-right">

        <?php while(have_rows('p2b_text_image')) : the_row(); 
            $image = get_sub_field('image');
            $subheader = get_sub_field('subheader');
            $header = get_sub_field('header');
            $snippet = get_sub_field('snippet');
            $link = get_sub_field('link');
            $link_text = get_sub_field('link_text');
        ?>
            <div class="row site-component-row p2-picture-text-row">

                <div class="col-md-6 p2-text-column">
                    <div class="text-wrapper">

                        <?php if($subheader) : ?>
                            <h4 class="_20 body-text _bold _uppercase"><?php echo $subheader ?></h4>
                        <?php endif; ?>

                        <?php if($header) : ?>
                            <h3 class="title-text _48 _medium"><?php echo $header ?></h3>
                        <?php endif; ?>

                        <?php if($snippet) : ?>
                            <div class="_16 body-text _dark-grey"><?php echo $snippet ?></div>
                        <?php endif; ?>

                        <?php if($link || $link_text) : ?>
                            <?php get_template_part('inc/components/partials/read-more-arrow', null, array('link' => $link, 'link_text' => $link_text) ) ?>
                        <?php endif; ?>
                    </div>
                    
                </div>

                <div class="col-md-6 p2-picture-column">
                    <img src="<?php echo $image['url'] ?>" />
                </div>
            </div>
        <?php endwhile; ?>

    </div>

<?php endif; ?>