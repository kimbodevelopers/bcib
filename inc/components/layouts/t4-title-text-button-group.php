<?php if( get_row_layout() == 't4_title_text_button_group' ): ?>
    <?php 
        $title = get_sub_field('title');
        $snippet = get_sub_field('snippet');
        $button_text = get_sub_field('button_text');
        $button_link = get_sub_field('button_link'); 
    ?>

    <div class="container-fluid site-component-container t4-container">
        <div class="row site-component-row t4-row small">
            <div class="col-md-6 t4-column left">
                <?php if($title) : ?>
                    <h2 class="title-text _medium _60 _white"><?php echo $title ?></h2>
                <?php endif; ?>
            </div>

            <div class="col-md-6">
                <?php if($snippet) : ?>
                    <div class="body-text _20 _blue-black-tint-2">
                        <?php echo $snippet ?>
                    </div>
                <?php endif; ?>

                <?php if($button_text) : ?>
                    <?php get_template_part('inc/components/partials/standard-button', null, array('button_height' => 'short', 'button_text' => $button_text, 'button_link' => $button_link, 'button_background' => 'brand-yellow')) ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>