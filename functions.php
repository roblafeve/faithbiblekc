<?php

    ////////////////////////////////////////////////////////////
   ////                                                    ////
  ////    Menus                                           ////
 ////                                                    ////
////////////////////////////////////////////////////////////

if ( function_exists( 'register_nav_menus' ) ) {
  register_nav_menus(
    array(
      'mobile_menu_left' => 'Left Mobile Menu',
      'mobile_menu_right' => 'Right Mobile Menu',
      'header_menu' => 'Header Menu',
      'footer_menu' => 'Footer Menu'
    )
  );
}

    ////////////////////////////////////////////////////////////
   ////                                                    ////
  ////    Sermon Post Type                                ////
 ////                                                    ////
////////////////////////////////////////////////////////////

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'sermon',
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

    ////////////////////////////////////////////////////////////
   ////                                                    ////
  ////    Sermon Taxonomies                               ////
 ////                                                    ////
////////////////////////////////////////////////////////////

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_sermon_taxonomies', 0 );

//create two taxonomies, genres and writers for the post type "book"
function create_sermon_taxonomies() 
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Series', 'taxonomy general name' ),
    'singular_name' => _x( 'Series', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Series' ),
    'all_items' => __( 'All Series' ),
    'parent_item' => __( 'Parent Series' ),
    'parent_item_colon' => __( 'Parent Series:' ),
    'edit_item' => __( 'Edit Series' ), 
    'update_item' => __( 'Update Series' ),
    'add_new_item' => __( 'Add New Series' ),
    'new_item_name' => __( 'New Series Name' ),
    'menu_name' => __( 'Series' ),
  ); 	

  register_taxonomy('series',array('sermon'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'series' ),
  ));

  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Preachers', 'taxonomy general name' ),
    'singular_name' => _x( 'Preacher', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Preachers' ),
    'popular_items' => __( 'Popular Preachers' ),
    'all_items' => __( 'All Preachers' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Preacher' ), 
    'update_item' => __( 'Update Preacher' ),
    'add_new_item' => __( 'Add New Preacher' ),
    'new_item_name' => __( 'New Preacher Name' ),
    'separate_items_with_commas' => __( 'Separate preachers with commas' ),
    'add_or_remove_items' => __( 'Add or remove preachers' ),
    'choose_from_most_used' => __( 'Choose from the most frequent preachers' ),
    'menu_name' => __( 'Preachers' ),
  ); 

  register_taxonomy('preacher','sermon',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'preacher' ),
  ));
}

?>