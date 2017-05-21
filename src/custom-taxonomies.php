<?php

namespace Vue_WP;

add_action( 'init', function() {
	$labels = [
		"name"          => esc_html( 'Superhero Categories' ),
		"singular_name" => esc_html( 'Superhero Category' ),
	];
	$args = [
		"labels"             => $labels,
		"hierarchical"       => true,
		'public'             => true,
		"show_admin_column"  => true,
		"show_in_rest"       => true,
		"show_in_quick_edit" => true,
	];
	register_taxonomy( get_taxonomy_superhero_category(), get_type_superhero(), $args );
} );
