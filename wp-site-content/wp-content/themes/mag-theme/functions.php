<?php
// this file is loaded before the parent theme functions.php file.
// Both are loaded

// import css
add_action( 'wp_enqueue_scripts', 'mag_enqueue_styles' );

function mag_enqueue_styles() {
	wp_enqueue_style( 
		'mag-theme-style',
        get_theme_file_uri('/dist/css/style.css'),
        array(),
        wp_get_theme()->get( 'Version' ),
        'all'
	);
}