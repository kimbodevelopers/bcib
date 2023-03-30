<?php if( get_row_layout() == 'text_content_media' ): ?>

<?php 
    $logo = get_sub_field('logo');
    $subtitle = get_sub_field('subtitle');
    $title = get_sub_field('title');
    $snippet = get_sub_field('snippet');
    $button_text = get_sub_field('button_text');
    $button_link = get_sub_field('button_link');
    $video = get_sub_field('video');
?>
    <div class="container-fluid site-component-container text-content-media-container">
        <div class="row site-component-row wide text-content-media-row">
            <div class="col-md-6 content-column">
                <div class="content-wrapper">

                    <img class="logo" src="<?php echo $logo['url'] ?>" />

                    <h3 class="title-text _20 _bold _uppercase _dark-grey-2"><?php echo $subtitle ?></h3>
                    <h2 class="title-text _60  _dark-grey-2"><?php echo $title ?></h2>
                    <div class="body-text _20 _normal _dark-grey-2"><?php echo $snippet ?></div>
                    
                    <?php get_template_part('inc/components/partials/read-more-arrow', null, array('link' => $button_link, 'link_text' => $button_text) ) ?>
                </div>
            </div>

            <div class="col-md-6 video-column">
                <video muted loop controls>
                    <source src="<?php echo $video['url'] ?>" type="video/mp4" />
                </video>
            </div>
        </div>
    </div>

<?php endif; ?>