<?php

    ////////////////////////////////////////////////////////////
   ////                                                    ////
  ////    Menus                                           ////
 ////                                                    ////
////////////////////////////////////////////////////////////

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








    ////////////////////////////////////////////////////////////
   ////                                                    ////
  ////    Sermon Post Type                                ////
 ////                                                    ////
////////////////////////////////////////////////////////////

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'fbc_sermon',
		array(
			'labels' => array(
				'name' => __( 'Sermons' ),
				'singular_name' => __( 'Sermon' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'sermons'),
		)
	);
}



?>