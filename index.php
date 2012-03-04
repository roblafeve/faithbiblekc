<?php get_header(); ?>

						<?php 
						$main_query = new WP_Query('pagename=Home');
						 if ( $main_query->have_posts() ) while ( $main_query->have_posts() ) : $main_query->the_post(); the_content(); edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); endwhile; ?>
				
<?php	
get_footer();
?>