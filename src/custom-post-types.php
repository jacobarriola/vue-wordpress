<?php

namespace Vue_WP;

/*
 * Register our custom post type
 */
add_action( 'init', function() {
	$labels = [
		'name'          => esc_html( 'Superheros' ),
		'singular_name' => esc_html( 'Superhero' ),
		'menu_name'     => esc_html( 'Superheros' ),
	];
	$args = [
		'labels'       => $labels,
		'show_in_rest' => true,
		'rest_base'    => esc_html( 'superheros' ),
		'public'       => true,
	];
	register_post_type( get_type_superhero(), $args );
} );
