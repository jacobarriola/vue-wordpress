<?php
get_header();

while( have_posts() ) :
	the_post();
	the_title('<h1>', '</h1>');
	the_content();
endwhile;
/*
 * Don't do this. You should have a footer.php file.
 *
 * I'm doing a lot of the demos in the single index.php file to prevent me from
 * jumping from file to file.
 */
wp_footer();