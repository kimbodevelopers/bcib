<?php if( get_row_layout() == 'p1b_title_text_background' ): ?>
    <div class="container-fluid site-component-container p1b-title-text-background-container">
    <?php 
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $snippet = get_sub_field('snippet');
        $button_text = get_sub_field('button_text');
        $button_link = get_sub_field('button_link');
    ?>
        <div class="row site-component-row p1b-title-text-background-row medium" style="background-image: url('<?php echo $image['url'] ?>')">
            <div class="col-md-7 col-12">


                <?php if($title) : ?>
                    <h2 class="title-text _37 _medium _white"><?php echo $title ?></h2>
                <?php endif; ?>

                <?php if($snippet) : ?>
                    <div class="body-text _32 _white"><?php echo $snippet ?></div>
                <?php endif; ?>

                <?php get_template_part('inc/components/partials/standard-button', null, array('button_height' => 'short', 'button_text' => $button_text, 'button_link' => $button_link)) ?>

            </div>

        </div>

    </div>
<?php endif; ?>