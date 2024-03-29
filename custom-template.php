<?php defined('ABSPATH') or die(""); ?>
<?php get_header(); 
/* Template Name: Custom Template */
?>

<?php if( have_rows('custom_content') ): ?>
    <?php $layout_counter = 0;  ?>
    <?php while( have_rows('custom_content') ): the_row(); ?>
    <?php $layout_counter++;?>


        <?php get_template_part('inc/components/layouts/a1-accordion', null, array('layout_counter' => $layout_counter)) ?>

        <?php get_template_part('inc/components/layouts/t1-text-group') ?>
        <?php get_template_part('inc/components/layouts/t1b-featured-cards-group') ?>
        <?php get_template_part('inc/components/layouts/t2-title-text-only-group') ?>
        <?php get_template_part('inc/components/layouts/t3-tabs-group', null, array('layout_counter' => $layout_counter)) ?>
        <?php get_template_part('inc/components/layouts/t4-title-text-button-group') ?>

        
        <?php get_template_part('inc/components/layouts/p1-picture') ?>
        <?php get_template_part('inc/components/layouts/p1a-title-text-background') ?>
        <?php get_template_part('inc/components/layouts/p1b-title-text-background') ?>
        <?php get_template_part('inc/components/layouts/p2a-picture-text') ?>
        <?php get_template_part('inc/components/layouts/p2b-text-picture') ?>
        <?php get_template_part('inc/components/layouts/p3-carousel-group') ?>
        <?php get_template_part('inc/components/layouts/p4-video') ?>
        <?php get_template_part('inc/components/layouts/p5-single-image-carousel') ?>
        <?php get_template_part('inc/components/layouts/p6-image-left-text-right-group') ?>

        <?php get_template_part('inc/components/layouts/b1-link-table') ?>
        <?php get_template_part('inc/components/layouts/b3-table') ?>

        <?php get_template_part('inc/components/layouts/c4-medium-cards') ?>
    
        <?php get_template_part('inc/components/layouts/h1-hero', null, array('layout_counter'=> $layout_counter)) ?>
        <?php get_template_part('inc/components/layouts/f1-form') ?>
        <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>