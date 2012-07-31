<?php /*
Template Name: Taxonomy Archive
*/ ?>

<?php get_header(); ?>
	
	<h1>Sermons</h1>
	<h4>Filtered by “<?php single_tag_title(); ?>”</h4>

	<?php include 'inc/sermon.php'; ?>

	<?php include ('sidebar-sermon.php'); ?>

<?php get_footer(); ?>