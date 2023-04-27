<?php if( get_row_layout() == 'p1a_title_text_background' ): ?>
    <div class="container-fluid site-component-container p1a-title-text-background-container">
    <?php 
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $subheader = get_sub_field('subheader');
        $snippet = get_sub_field('snippet');
        $button_text = get_sub_field('button_text');
        $button_link = get_sub_field('button_link');
    ?>
        <div class="row site-component-row p1a-title-text-background-row medium" style="background-image: url('<?php echo $image['url'] ?>')">
            <div class="col-md-7">
                <?php if($subheader) : ?>
                    <h4 class="body-text _20 _bold _white"><?php echo $subheader; ?></h4>
                <?php endif; ?>

                <?php if($title) : ?>
                    <h2 class="title-text _62 _medium _white"><?php echo $title ?></h2>
                <?php endif; ?>
            </div>

            <div class="col-md-5">
                <?php if($snippet) : ?>
                    <div class="body-text _32 _white"><?php echo $snippet ?></div>
                <?php endif; ?>

                <?php get_template_part('inc/components/partials/standard-button', null, array('button_height' => 'short', 'button_text' => $button_text, 'button_link' => $button_link)) ?>

            </div>
        </div>

    </div>
<?php endif; ?>