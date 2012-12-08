<!-- Used in taxonomy.php & archive-sermon.php -->

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div class='sermon'>
			<div class='play'>
				<div class='icon'>▶</div>
			</div>
			<hgroup>
				<h3 id="post-<?php the_ID(); ?>">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				<h6><?php the_time('F jS, Y') ?> by 
					<?php $terms = get_terms('preacher');
						foreach ($terms as $term) {
						    echo '<a href="'.get_term_link($term->slug, 'preacher').'">'.$term->name.'</a>';
						}
					;?>
				</h6>
			</hgroup>
		</div>

	<?php endwhile; ?>
<?php endif; ?>

