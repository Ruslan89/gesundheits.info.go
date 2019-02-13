<?php

function university_post_types() {

//Heilmittel	
	register_post_type('heilmittel', array(
		/*'capability_type' 	=> 'heilmittel',
		'map_meta_cap'		=> true,  				//user roles*/
		'show_in_rest' 		=> true,
		'supports' 			=> array('title', 'excerpt', 'page-attributes', 'thumbnail'),
		'taxonomies' 		=> array('category', 'post_tag'),
		'rewrite' 			=> array('slug' => 'heilmittel'),
		'has_archive' 		=> true, 
		'public' 			=> true,
		'labels' 			=> array(
			'name' 			=> 'Heilmittel',
			'add_new_item' 	=> 'Neues Heilmittel hinzufügen', 
			'edit_item' 	=> 'Heilmittel bearteiten',
			'all_items' 	=> 'Alle Heilmittel',
			'singular_name' => 'Heilmittel',
		),
		'menu_icon' => 'dashicons-heart' 
	));

//Vitalstoffe	
	register_post_type('vitalstoff', array(

		'supports' 			=> array('title', 'excerpt', 'page-attributes', 'thumbnail'),
		'taxonomies' 		=> array('category', 'post_tag'),
		'rewrite' 			=> array('slug' => 'vitalstoffe'),
		'has_archive' 		=> true, 
		'public' 			=> true,
		'labels' 			=> array(
			'name' 			=> 'Vitalstoffe',
			'add_new_item' 	=> 'Neuen Vitalstoff hinzufügen', 
			'edit_item' 	=> 'Vitalstoff bearteiten',
			'all_items' 	=> 'Alle Vitalstoffe',
			'singular_name' => 'Vitalstoff',
		),
		'menu_icon' => 'dashicons-star-empty' 
	));

//Beschwerden	
	register_post_type('beschwerde', array(
		/*'capability_type' 	=> 'beschwerde',
		'map_meta_cap'		=> true,*/
		'supports' => array('title', 'excerpt', 'page-attributes', 'post-formats', 'thumbnail'),
		'taxonomies' => array('category', 'post_tag'),
		'rewrite' => array('slug' => 'beschwerden'),
		'has_archive' => true, 
		'public' => true,
		'labels' => array(
			'name' => 'Beschwerden',
			'add_new_item' => 'Neue Beschwerde hinzufügen', 
			'edit_item' => 'Beschwerde bearteiten',
			'all_items' => 'Alle Beschwerden',
			'singular_name' => 'Beschwerde',
		),
		'menu_icon' => 'dashicons-dismiss' 
	));

  // Note Post Type
  register_post_type('note', array(
    'capability_type' => 'note',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Notes',
      'add_new_item' => 'Add New Note',
      'edit_item' => 'Edit Note',
      'all_items' => 'All Notes',
      'singular_name' => 'Note'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog'
  ));


}

add_action('init', 'university_post_types');