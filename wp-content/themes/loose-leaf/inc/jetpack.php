<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Loose Leaf
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function looseleaf_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

	// Add support for Jetpack's CPTs
	add_theme_support( 'jetpack-portfolio' );
	add_theme_support( 'jetpack-testimonial' );

	// Add support for Jetpack's Site Logo
	add_theme_support( 'site-logo' );
}
add_action( 'after_setup_theme', 'looseleaf_jetpack_setup' );
