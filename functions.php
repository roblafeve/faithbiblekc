<?php

function register_my_menus() {
	register_nav_menus(
		array( 
			'members-menu' => __( 'Members Menu' ),
			'header-menu'  => __( 'Header Menu'  ),
			'footer-menu'  => __( 'Footer Menu'  )
		)
	);
}
add_action( 'init', 'register_my_menus' );

?>