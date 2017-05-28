<?php

namespace Vue_WP;

add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_script(
		'axios',
		'https://unpkg.com/axios/dist/axios.min.js',
		null,
		null,
		false
	);

	wp_enqueue_script(
		'vue',
		'https://unpkg.com/vue',
		'axios',
		null,
		false
	);

	wp_enqueue_style(
		'css',
		get_stylesheet_uri(),
		null,
		wp_get_theme()->version
	);

});