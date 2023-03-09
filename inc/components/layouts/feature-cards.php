<?php if( get_row_layout() == 'feature_cards_group' ): ?>

    <div class="container-fluid site-component-container feature-cards-container">
        <?php 
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            ?>    

        <?php if($subtitle) : ?>
            <div class="row site-component-row featured-cards-title-wrapper">
                <h3 class=""><?php echo $subtitle ?></h3>
            </div>
        <?php endif; ?>

        <?php if($title) : ?>
            <div class="row site-component-row featured-cards-title-wrapper">
                <h2 class="featured-cards-title title-text _60 blue-black-tint-2"><?php echo $title ?></h2>
            </div>
        <?php endif; ?>

        <div class="row site-component-row wide feature-cards-row">

            <?php $count = 0; ?>

            <?php while(have_rows('feature_cards')) : the_row(); 
                $title = get_sub_field('title');
                $icon = get_sub_field('icon');
                $snippet = get_sub_field('snippet');
                $link_text = get_sub_field('link_text');
                $link = get_sub_field('link');

                $count += 1;
            ?>
                <div class="col-md-6 col-lg-3 feature-cards-column <?php if($count !== 1) : ?>card-border<?php endif; ?>">

                    <div class="icon-wrapper">
                        <img src="<?php echo $icon['url'] ?>">
                    </div>

                    <?php if($title) : ?>
                        <h3 class="title-text _32 _medium"><?php echo $title ?></h3>
                    <?php endif; ?>

                    <?php if($snippet) : ?>
                        <div class="body-text _20 _dark-grey">
                            <?php echo $snippet ?>
                        </div>
                    <?php endif; ?>

                    <?php if($link_text || $link) : ?>
                        <a href="<?php echo $link ?>" class="read-more-link _blue-black-tint-2 _medium body-text _20">
                            <?php $read_more_arrow = get_field('read_more_arrow', 'options'); ?>
                            <?php echo $link_text ?><img class="read-more-button" src="<?php echo $read_more_arrow['url'] ?>">
                        </a>
                    <?php endif; ?>

                </div>
                


            <?php endwhile; ?>
        </div>
    </div>



<?php endif; ?>