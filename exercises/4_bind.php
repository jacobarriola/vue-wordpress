<?php

namespace Vue_WP;

function get_bind_exercise() {

	ob_start(); ?>

	<div id="app4">
	    <ul>
	        <li v-for="category in categories">
	            <label :for="category">
	                <input :id="category" :value="category" v-model="checkedCategories" type="checkbox">
	                {{ category }}
	            </label>
	        </li>
	    </ul>
	    <p>Checked categories: {{ checkedCategories }}</p>
	</div>
	<script>
	    const app4 = new Vue({
	        el: '#app4',
	        data: {
	        	categories: [ 'fly', 'male', 'female', 'movie' ],
	            checkedCategories: [],
	        }
	    })
	</script>


	<?php
	return ob_get_clean();
}
