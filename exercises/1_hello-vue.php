<?php

namespace Vue_WP;

function get_hello_vue() {
	ob_start(); ?>














	<?php
	return ob_get_clean();
}
