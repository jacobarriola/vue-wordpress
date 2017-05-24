<?php

namespace Vue_WP;

function get_method_exercise() {

	ob_start(); ?>


	<div id="app3">
	    <div v-for="superhero in superheros">
	        {{ superhero }}
	    </div>
	    <input type="text" v-model="newSuperhero">
	    <button v-on:click="addSuperhero(newSuperhero)">Add Superhero</button>
	</div>
	<script>
	    const app3 = new Vue({
	        el: '#app3',
	        data: {
	        	newSuperhero: '',
	        	superheros: [
	        		'Bat Woman',
	                'Wonder Woman',
	                'Superman'
	            ]
	        },
	        methods: {
	        	addSuperhero(newSuperHero) {
	        		this.superheros.push(newSuperHero);
	        		this.newSuperhero = '';
	            }
	        }
	    });
	</script>


	<?php
	return ob_get_clean();
}
