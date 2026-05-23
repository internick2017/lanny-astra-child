<?php
/**
 * Astra Child — Lanny Herrera functions
 *
 * @package Astra_Child_Lanny
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue parent + child styles.
 */
function lanny_enqueue_styles() {
	wp_enqueue_style(
		'astra-parent',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'astra' )->get( 'Version' )
	);

	wp_enqueue_style(
		'astra-child-lanny',
		get_stylesheet_uri(),
		array( 'astra-parent' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'lanny_enqueue_styles' );
