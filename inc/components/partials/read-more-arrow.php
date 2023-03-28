<?php if($args['link'] || $args['link_text']) : ?>
    <a href="<?php echo $args['link'] ?>" class="read-more-link _blue-black-tint-2 _medium body-text _20">
        <?php $read_more_arrow = get_field('read_more_arrow', 'options'); ?>
        <?php echo $args['link_text'] ?><img class="read-more-button" src="<?php echo $read_more_arrow['url'] ?>">
    </a>
<?php endif; ?>
