<?php /* 
Template Name: Sermon Single 
*/ ?>

<?php get_header(); ?>

	<h1>Sermons</h1>
	<h3><?php the_title(); ?></h3>
	<small><?php the_time('F jS, Y') ?> by 

		<?php $terms = get_terms('preacher');
			foreach ($terms as $term) {
			    echo '<a href="'.get_term_link($term->slug, 'preacher').'">'.$term->name.'</a>';
			}
		;?>

	</small>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

<?php include ('sidebar-sermon.php'); ?>

<?php get_footer(); ?>