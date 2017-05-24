<?php

namespace Vue_WP;

define( 'VUE_WP_VERSION', wp_get_theme()->version );
define( 'VUE_WP_DIR', __DIR__ );
define( 'VUE_WP_URL', get_template_directory_uri() );

require_once VUE_WP_DIR . '/src/models.php';
//require_once VUE_WP_DIR . '/src/enqueue.php';
require_once VUE_WP_DIR . '/src/custom-post-types.php';
require_once VUE_WP_DIR . '/src/custom-taxonomies.php';

/*
 * Load up the exercises
 */
require_once VUE_WP_DIR . '/exercises/1_hello-vue.php';
require_once VUE_WP_DIR . '/exercises/2_for-loops.php';
require_once VUE_WP_DIR . '/exercises/3_method.php';
require_once VUE_WP_DIR . '/exercises/4_bind.php';
require_once VUE_WP_DIR . '/exercises/5_search.php';