<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Mestizo
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function mestizo_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'mestizo_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function mestizo_jetpack_setup
add_action( 'after_setup_theme', 'mestizo_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function mestizo_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function mestizo_infinite_scroll_render
