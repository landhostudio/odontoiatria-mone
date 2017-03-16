<?php
/**
 * Template Name: Sedi
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
	<?php get_template_part('template-parts/content', 'locations'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
