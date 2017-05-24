<?php
get_header(); ?>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>

namespace Vue_WP;

get_header();

echo get_hello_vue();
echo get_for_loops();
echo get_method_exercise();
echo get_bind_exercise();
echo get_search_exercise();

wp_footer();