<?php if( get_row_layout() == 'a1_accordion' ): ?>

    <?php $layout_counter = $args['layout_counter']; ?>

    <?php 
        $title = get_sub_field('title'); 
        $description = get_sub_field('description');
        $link = get_sub_field('link');
        $link_text = get_sub_field('link_text');
    ?>

    <div class="container-fluid site-component-container a1-accordion-container">
        <div class="row a1-accordion-row site-component-row medium">
            <div class="col-lg-5 a1-content-column">
                <div class="content-wrapper">
                    <?php if($title) : ?>
                        <h2 class="title-text _80 _dark-grey-2 "><?php echo $title ?></h2>
                    <?php endif; ?>

                    <?php if($description) : ?>
                        <div class="body-text _20 _dark-grey description">
                            <?php echo $description ?>
                        </div>
                    <?php endif; ?>

                    <?php if($link || $link_text) : ?>
                            <?php get_template_part('inc/components/partials/read-more-arrow', null, array('link' => $link, 'link_text' => $link_text) ) ?>
                        <?php endif; ?>

                </div>
            </div>

            <div class="col-lg-7">
                <div class="accordion accordion-flush" id="accordionFlush-<?php echo $layout_counter ?>">

                    <?php while(have_rows('topics_and_answers')) : the_row(); 
                        $topic = get_sub_field('topic');
                        $answer = get_sub_field('answer');
                    ?>
                        <div class="accordion-item">
                            
                            <h2 class="accordion-header" id="flush-heading-<?php echo $layout_counter ?>-<?php echo get_row_index(); ?>">
                                <button class="accordion-button collapsed body-text _20 _blue-black-tint-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $layout_counter ?>-<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="flush-collapse-<?php echo $layout_counter ?>-<?php echo get_row_index(); ?>">
                                    <?php echo $topic ?>
                                </button>
                            </h2>

                            <div id="flush-collapse-<?php echo $layout_counter ?>-<?php echo get_row_index(); ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?php echo $layout_counter ?>-<?php echo get_row_index(); ?>" data-bs-parent="#accordionFlush-<?php echo $layout_counter ?>">
                                <div class="accordion-body _20 _blue-black-tint-2">
                                    <?php echo $answer ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>

        </div>
    </div>
<?php endif; ?>