<?php if( get_row_layout() == 'p4_video_embed' ): ?>

    <?php $video_type = get_sub_field('video_type'); ?>

    <div class="container-fluid site-component-container p4-container">
        <div class="row site-component-row p4-row small">

            <?php if($video_type === 'youtube_link') : ?>
                <div class="col-12 p4-column youtube-link">
                    <?php if(get_sub_field('youtube_video_link')) : ?>
                        <?php echo get_sub_field('youtube_video_link') ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if($video_type === 'video_file') : ?>
                <div class="col-12 p4-column">

                    <?php if(get_sub_field('video_file')) : ?>
                        <video controls src="<?php echo get_sub_field('video_file') ?>"></video>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>

<?php endif; ?>