<?php
/**
 * Template Name: Studio
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
	<?php get_template_part('template-parts/content', 'studio'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
