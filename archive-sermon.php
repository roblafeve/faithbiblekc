<?php /* 
Template Name: Sermon Archive 
*/ ?>

<?php get_header(); ?>

<div class='content-header'>
	<h1>Sermons</h1>
</div>
<?php include ('sidebar-sermon.php'); ?>
<div class='content'>
	<?php include 'inc/sermon.php'; ?>
</div>

<?php get_footer(); ?>