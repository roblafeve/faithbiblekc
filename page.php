<?php get_header();?>

  <div id="main">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); the_content(); edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); endwhile; ?>
  </div>
  <div id="sidebar">
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>