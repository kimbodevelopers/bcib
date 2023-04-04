<?php if( get_row_layout() == 'h1_hero' ): ?>
    <?php $image = get_sub_field('image'); ?>
    <div class="container-fluid site-component-container h1-hero-container">
        <div class="row site-component-row h1-hero-row small">
            <div class="col-12">
                <img src="<?php echo $image['url'] ?>">
            </div>
        </div>
    </div>
<?php endif; ?>