<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lanny_enqueue_styles() {
	wp_enqueue_style(
		'astra-parent',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'astra' )->get( 'Version' )
	);

	wp_enqueue_style(
		'lanny-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'astra-child-lanny',
		get_stylesheet_uri(),
		array( 'astra-parent', 'lanny-fonts' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'lanny_enqueue_styles' );
