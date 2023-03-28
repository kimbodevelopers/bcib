<?php if( get_row_layout() == 'small_title_text_only' ): ?>
    <?php 
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $link = get_sub_field('link');
        $link_text = get_sub_field('link_text');
    ?>
    <div class="container-fluid site-component-container title-text-container">
        <div class="row site-component-row title-text-row small">
            <div class="col-lg-3">
                <h3 class="title-text _20 _uppercase _dark-grey _bold mb-md-4 mb-3"><?php echo $title ?></h3>
            </div>
            <div class="col-lg-9">
                <div class="content-wrapper _dark-grey body-text _32 mb-md-4 mb-3">
                    <?php echo $content ?>
                </div>

                <?php get_template_part('inc/components/partials/read-more-arrow', null, array('link' => $link, 'link_text' => $link_text) ) ?>
            </div>
        </div>
    </div>

<?php endif; ?>