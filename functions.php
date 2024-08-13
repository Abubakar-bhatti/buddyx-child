<?php
/**
 * Buddyx Child functions and definitions.
 *
 * This file must be parseable by PHP 5.2.
 *
 * @see https://developer.wordpress.org/themes/basics/theme-functions/
**/

add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('style', get_parent_theme_file_uri( 'style.css' ));
	wp_enqueue_style('style-child', get_stylesheet_uri());
});