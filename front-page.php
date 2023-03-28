<?php defined('ABSPATH') or die(""); ?>
<?php get_header(); 
/* Template Name: Home */
?>

<?php if( have_rows('home_content') ): ?>
    <?php while( have_rows('home_content') ): the_row(); ?>
        
        <?php get_template_part('inc/components/layouts/hero') ?>
        
        <?php get_template_part('inc/components/layouts/feature-cards') ?>

        <?php get_template_part('inc/components/layouts/small-title-text-only') ?>

        <?php get_template_part('inc/components/layouts/carousel') ?>

        <?php get_template_part('inc/components/layouts/background-cta') ?>

        <?php get_template_part('inc/components/layouts/text-content-media') ?>
        
    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>