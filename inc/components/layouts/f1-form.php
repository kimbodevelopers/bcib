<?php if( get_row_layout() == 'f1_form' ): ?>

    <?php 
        $form_header = get_sub_field('form_header');
        $form_description = get_sub_field('form_description');
        $form_shortcode = get_sub_field('form_shortcode');    
    ?>

    <div class="container-fluid site-component-container f1-form-container">
        <div class="row site-component-row f1-form-row small">
            <div class="col-md-6 description-column">
                <?php if($form_header) : ?>
                    <h3 class="title-text _33 _dark-grey-2"><?php echo $form_header ?></h3>
                <?php endif; ?>

                <?php if($form_description) : ?>
                    <div class="body-text _21 _dark-grey">
                        <?php echo $form_description ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-md-6 form-column">
                <?php echo do_shortcode($form_shortcode) ?>
            </div>
        </div>
    </div>
<?php endif; ?>