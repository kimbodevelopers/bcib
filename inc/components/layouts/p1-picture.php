<?php if( get_row_layout() == 'p1_picture' ): ?>
    <?php $image = get_sub_field('image'); ?>
    <div class="container-fluid site-component-container p1-container">
        <div class="row site-component-row p1-row small">
            <div class="col-12">
                <img src="<?php echo $image['url'] ?>">
            </div>
        </div>
    </div>
<?php endif; ?>