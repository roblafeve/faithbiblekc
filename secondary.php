<?php
/*
Template Name: Secondary
*/
?>

<?php get_header(); ?>

	<h2><?php the_title(); ?></h2>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

<?php get_footer(); ?>