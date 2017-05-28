<?php

namespace Vue_WP;

function get_for_loops() {
	ob_start(); ?>




	<div id="app2">
	    <div v-for="superhero in superheros" v-show="superhero.canFly">
	        {{ superhero.name }} - {{ superhero.canFly }}
	    </div>
	</div>

	<script>
		const app2 = new Vue({
			el: '#app2',
			data: {
	            superheros: [
	                { name: 'Batman', canFly: false },
	                { name: 'Superwoman', canFly: true },
	                { name: 'Wonder Woman', canFly: true },
	                { name: 'Bat Girl', canFly: false }
	            ]
			}
		});
	</script>



	<?php
	return ob_get_clean();
}
