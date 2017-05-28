<?php

namespace Vue_WP;

add_action( 'init', function() {

	$labels = [
		"name"          => esc_html( 'Gender' ),
		"singular_name" => esc_html( 'Gender' ),
	];
	$args = [
		"labels"             => $labels,
		"hierarchical"       => true,
		'public'             => true,
		"show_admin_column"  => true,
		"show_in_rest"       => true,
		"show_in_quick_edit" => true,
	];
	register_taxonomy( get_taxonomy_gender(), get_type_superhero(), $args );

} );
