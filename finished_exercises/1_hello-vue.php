<?php

namespace Vue_WP;

function get_hello_vue() {
	ob_start(); ?>


	<div id="app">
	    The value is of 'message' is <strong>{{ message }}</strong>
	</div>

	<script>
	    const app = new Vue({
	        el: '#app',
	        data: {
	            message: 'Hello Vue'
	        }
	    });
	</script>


	<?php
	return ob_get_clean();
}
