<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); {
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><br />
<?php the_content(); edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>

<?php } endwhile; ?>

		<?php get_sidebar(); ?>
<?php get_footer(); ?>