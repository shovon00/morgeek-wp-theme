<?php

//Register Menu
register_nav_menu('main-menu', 'Main Menu');


//General Function for Website
function moregeek_general_function(){


	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' ); 

	
}


//Post Type For Slider
register_post_type('moregeek_slide', array(
		'labels' => array(
				'name' => 'Sliders',
				'add_new_item' => 'Add Your Slider'
			),
		'public' => true,
		'supports' => array('title', 'thumbnail'),
	));

//Post Type For Counter
register_post_type('moregeek_counter', array(
		'labels' => array(
				'name' => 'Counter',
				'add_new_item' => 'Add Your Counter'
			),
		'public' => true,
		'supports' => array('title', 'editor'),
	));

//Post Type For AboutSlide
register_post_type('ab_slide', array(
		'labels' => array(
				'name' => 'About Slider',
				'add_new_item' => 'Add Your Slider'
			),
		'public' => true,
		'supports' => array('title', 'thumbnail', 'editor', 'custom-fields'),
	));

add_action('after_setup_theme', 'moregeek_general_function');



// EnQue Stylesheet From Index.php File

function moregeek_css(){

	wp_register_style('animate', get_template_directory_uri(). '/css/animate.min.css');

	wp_register_style('swiper', get_template_directory_uri(). '/css/swiper.css');

	wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap-select.min.css');

	wp_register_style('awesome', get_template_directory_uri(). '/css/font-awesome.min.css');

	wp_register_style('bootstrap.min', get_template_directory_uri(). '/css/bootstrap.min.css');

	wp_register_style('style', get_template_directory_uri(). '/css/style.css');
	
	wp_register_style('my_stylesheet', plugins_url('my-stylesheet.css', __FILE__));

	wp_register_style('responsive', get_template_directory_uri(). '/css/responsive.css');


	wp_enqueue_style('animate');
	wp_enqueue_style('swiper');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('awesome');
	wp_enqueue_style('bootstrap.min');
	wp_enqueue_style('style');
	wp_enqueue_style('my_stylesheet');
	wp_enqueue_style('responsive');
	
}

add_action('wp_enqueue_scripts', 'moregeek_css');


//EnQue JS file


function moregeek_js(){

	wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'),'1.1', true);

	wp_register_script('swiper', get_template_directory_uri(). '/js/swiper.min.js', array('jquery'),'1.1', true);

	wp_register_script('wow', get_template_directory_uri(). '/js/wow.min.js', array('jquery'),'1.1', true);

	wp_register_script('waypoints', get_template_directory_uri(). 'js/waypoints.js', array('jquery'),'1.1', true);

	wp_register_script('counterup', get_template_directory_uri(). 'js/jquery.counterup.min.js', array('jquery'),'1.1', true);

	wp_register_script('custom', get_template_directory_uri(). '/js/custom.js', array('jquery'),'1.1', true);

	wp_enqueue_script("jquery");
	wp_enqueue_script("bootstrap");
	wp_enqueue_script("swiper");
	wp_enqueue_script("wow");
	wp_enqueue_script("waypoints");
	wp_enqueue_script("counterup");
	wp_enqueue_script("custom");
}

add_action('wp_enqueue_scripts','moregeek_js');


include_once('inc/ReduxCore/framework.php');
include_once('inc/sample/sample-config.php');







