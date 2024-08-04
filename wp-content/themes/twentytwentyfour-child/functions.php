<?php
/**
 * Twenty Twenty-Four Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty_Twenty_Four_Child
 * @since 1.0.0
 */

add_action( 'wp_enqueue_scripts', 'ns_enqueue_styles' );
/**
 * Load style.css.
 */
function ns_enqueue_styles() {
	wp_enqueue_style(
		'ns-style',
		get_stylesheet_uri(),
		array(),
		'1.0.0'
	);
}
