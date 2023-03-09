<?php defined('ABSPATH') or die(""); ?>
<?php get_header(); 
/* Template Name: Custom Template */
?>

<?php if( have_rows('custom_content') ): ?>
    <?php while( have_rows('custom_content') ): the_row(); ?>
        
        <?php get_template_part('inc/components/layouts/hero') ?>

        <?php get_template_part('inc/components/layouts/feature-cards') ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>