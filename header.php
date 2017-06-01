<!DOCTYPE html>
<html>
<head><?php wp_head(); ?></head>
<body>
<?php
if ( ! is_front_page() ) : ?>
	<a href="<?php echo esc_url( get_site_url() ); ?>">👈 Home</a>
<?php
endif;
