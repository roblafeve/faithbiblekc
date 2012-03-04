<?php get_header();?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); the_content(); edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); endwhile; ?>
		<?php get_sidebar(); ?>
<?php get_footer(); ?>