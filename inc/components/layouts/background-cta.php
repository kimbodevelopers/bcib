<?php if( get_row_layout() == 'background_cta_group' ): ?>

    <?php 
        $background_image = get_sub_field('background_image');
        $title = get_sub_field('title');
        $snippet = get_sub_field('snippet');
        $button_text = get_sub_field('button_text');
        $button_link = get_sub_field('button_link');
    ?>

    <div class="container-fluid background-cta-container site-component-container" style="background-image: url(<?php echo $background_image['url'] ?>)">
        <div class="site-component-row background-cta-row">
            <div class="col-xl-6 col-lg-7 cta-column">
                <div class="cta-wrapper">
                    <h2 class="title-text _48 _white _medium"><?php echo $title ?></h2>
                    <div class="body-text _32 _white _regular _line-height-1-2 snippet"><?php echo $snippet ?></div>
                    <?php get_template_part('inc/components/partials/standard-button', null, array('button_height' => 'tall', 'button_text' => 'Apply Now', 'button_link' => '#')) ?>
                </div>

            </div>

            <div class="col-xl-6 col-lg-5">
                <!--  -->
            </div>
        </div>
    </div>
<?php endif; ?>