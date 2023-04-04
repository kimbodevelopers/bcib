<?php if( get_row_layout() == 'hero' ): ?>

    <?php 
        $video = get_sub_field('video'); 
        $play_button = get_sub_field('play_button');
        $pause_button = get_sub_field('pause_button');
    ?>

    <div class="video-container">

        <div class="video-overlay"></div>

        <video autoplay muted loop control>
            <source src="<?php echo $video['url'] ?>" type="video/mp4" />
        </video>

        <?php if($play_button) : ?>
            <div class="media-button">
                <button class="play-button">
                    <img class="play-button" src="<?php echo $play_button['url'] ?>" >
                </button>
                <button class="pause-button">
                    <img src="<?php echo $pause_button['url'] ?>" >
                </button>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>
