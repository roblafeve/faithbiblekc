<?php /*
Template Name: Taxonomy Archive
*/ ?>

<?php get_header(); ?>

<div class='content-header'>
	<h1>Sermons</h1>
	<h4>Filtered by “<?php single_tag_title(); ?>”</h4>
</div>
<?php include ('sidebar-sermon.php'); ?>
<div class='content'>
	<?php include 'inc/sermon.php'; ?>
</div>

<?php get_footer(); ?>