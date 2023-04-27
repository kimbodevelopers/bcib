<?php if( get_row_layout() == 'c3_small_cards' ): ?>

<?php 
    $component_type = get_sub_field('component_type'); 
    $title = get_sub_field('title');
    $post_type = get_sub_field('post_type');
?>

<?php if($component_type === 'archive') : ?>
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

    <div class="container-fluid site-component-container c3-small-cards-container">
        <div class="row site-component-row small">
            <?php while($post_query->have_posts()) : $post_query->the_post(); ?>
                <?php get_template_part('inc/components/partials/c3-small-card') ?>
            <?php endwhile; ?>
        </div>
    </div>

<?php else : ?>
    <div class="container-fluid site-component-container c3-small-cards-container">
        <div class="row site-component-row small">
            <?php while(have_rows('popular_services', 'option')) : the_row(); 
                $title = get_sub_field('title', 'option');
                $icon = get_sub_field('icon', 'option');
                $link = get_sub_field('link', 'option')
            ?>
                <?php get_template_part('inc/components/partials/c3-small-card') ?>
            <?php endwhile; ?>
        </div>
    </div>

<?php endif; ?>