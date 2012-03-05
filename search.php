<?php get_header(); ?>
 
        <div id="container">
            <div id="content">
 
<?php if ( have_posts() ) : ?>                
 
<?php while ( have_posts() ) : the_post() ?>
<p>
	<?php the_title(); ?>
</p>
<?php endwhile; ?>
 
<?php else : ?>
 <p>There were no search results</p>
<!-- here's where we'll put a search form if there're no posts -->
 
<?php endif; ?>           
 
            </div><!-- #content -->
        </div><!-- #container -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>