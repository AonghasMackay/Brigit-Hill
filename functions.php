<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */


//Remove wordpress bloat
function custom_cleanup() {
  	// Prints a link to the REST API
  	remove_action( 'wp_head', 'rest_output_link_wp_head');

	// Really Simple Discovery Link
	remove_action( 'wp_head', 'rsd_link');

	// Windows Live Writer Manifest Link
	remove_action( 'wp_head', 'wlwmanifest_link');

	// Prints Emoji CSS & Javascript
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
//After theme is initialized
add_action( 'after_setup_theme', 'custom_cleanup' );


//Injects CSS & js without affecting admin panel styles
function custom_enqueue() {
	//CSS
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'alignments', get_template_directory_uri() .'/css/alignments.css' );
	wp_enqueue_style( 'alignments' );
	wp_register_style( 'main_stylesheet', get_template_directory_uri() .'/css/main.css?v=0.21' );
	wp_enqueue_style( 'main_stylesheet' );

	// Scripts
	wp_deregister_script('jquery');
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', null, null, true );
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', null, null, true );
	wp_enqueue_script( 'popper' );
	wp_register_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', null, null, true );
	wp_enqueue_script( 'bootstrap_js' );
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue' );


// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';


//ACF Option Menus
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

automatic_feed_links();
add_theme_support( 'menus' );


//Image Arrays
add_image_size( 'header_image', 1600, 545, true );

//diables posts
function remove_posts_menu() {
	remove_menu_page('edit.php');
	remove_menu_page( 'edit-comments.php' );
}
add_action('admin_menu', 'remove_posts_menu');

?>