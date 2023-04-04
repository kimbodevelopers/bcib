<?php if( get_row_layout() == 'c4_medium_cards' ): ?>

    <?php 
        $component_type = get_sub_field('component_type'); 
        $title = get_sub_field('title');
        $post_type = get_sub_field('post_type');
    ?>

    <?php 
        $paged = ( get_query_var('paged') ) ? absint( get_query_var('paged') ) : 1;

        if( get_query_var('paged') ) {
            $paged = get_query_var('paged');
        } elseif (get_query_var('page')) {
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }
        
        $post_query = new WP_Query(array(
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'post__status' => 'published',
            'order' => 'ASC',
            'orderby' => 'title',
        ));

        $wp_query = $post_query;
    ?>   

    <div class="container-fluid site-component-container c4-medium-cards-container">
        <div class="row site-component-row small">
            <?php if($component_type === 'featured') : ?>
                <div class="col-12">
                    <h2><?php $title = get_sub_field('title') ?></h2>
                </div>

            <?php endif; ?>

            <?php while($post_query->have_posts()) : $post_query->the_post(); ?>
                <?php get_template_part('inc/components/partials/c4-medium-card') ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>