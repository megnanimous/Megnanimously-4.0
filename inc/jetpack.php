<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Megnanimously 4.0
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function megnanimously_4_0_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'megnanimously_4_0_jetpack_setup' );
