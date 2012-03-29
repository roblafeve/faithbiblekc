<ul>
<?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $post ){
		echo '<li><a href="' . get_permalink($post["ID"]) . '" title="Look '.$post["post_title"].'" >' .   $post["post_title"].'</a> </li> ';
	}
?>
</ul>