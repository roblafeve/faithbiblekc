<?php get_header(); ?>

	<?php $main_query = new WP_Query('pagename=Home'); if ( $main_query->have_posts() ) while ( $main_query->have_posts() ) : $main_query->the_post();the_content(); endwhile; ?>

<?php get_footer(); ?>