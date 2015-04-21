<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Radix
 * @since Radix 1.0
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function Radix_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'Radix_jetpack_setup' );
