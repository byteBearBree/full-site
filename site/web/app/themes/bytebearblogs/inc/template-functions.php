<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Byte_Bear_Blogss
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function byte_bear_blogss_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'byte_bear_blogss_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function byte_bear_blogss_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'byte_bear_blogss_pingback_header' );

/**
 * Pretty debugging
 * @param $var - one or many variables to dump
 */
function pr($args){
	echo '<pre style="background:black;color:white;padding:1em;font-family:Courier;white-space:pre-wrap;">';
	  echo '<div style="color:lime;">Debug:</div>';
	  foreach(func_get_args() as $arg){
		echo '<div>' . print_r($arg, true) . '</div>';
	  }
	echo '</pre>';
  }
  
  function dd($args){
	pr($args);
	die;
  }
  
  
  if(!is_admin() && !function_exists('get_field')){
	function get_field(){
	  return 'Please install ACF to continue!';
	}
  }
