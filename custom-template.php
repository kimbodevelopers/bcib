<?php defined('ABSPATH') or die(""); ?>
<?php get_header(); 
/* Template Name: Custom Template */
?>

<?php if( have_rows('custom_content') ): ?>
    <?php $layout_counter = 0;  ?>
    <?php while( have_rows('custom_content') ): the_row(); ?>
    <?php $layout_counter++;?>


        <?php get_template_part('inc/components/layouts/t1-text-group') ?>

        <?php get_template_part('inc/components/layouts/t1b-featured-cards-group') ?>

        <?php get_template_part('inc/components/layouts/t2-title-text-only-group') ?>

        <?php get_template_part('inc/components/layouts/t3-tabs-group', null, array('layout_counter' => $layout_counter)) ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>