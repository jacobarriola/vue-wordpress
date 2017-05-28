<?php

namespace Vue_WP;

function get_search_exercise() {

	ob_start(); ?>

	<div id="searchApp">
		<h2>Search 🔍</h2>
		<form v-on:submit.prevent="runSearch(keywords)">
			<input type="search" v-model="keywords">
			<input type="submit" value="Search">
		</form>
		<div v-for="{title, content} in superheros">
			<h2>{{ title.rendered }}</h2>
			<p v-html="content.rendered"></p>
		</div>
		<div>
			<h3>Gender</h3>
			<div v-for="{id, name} in genders">
				<label :for="id">
					<input :id="id" :value="id" @click="runSearch" v-model="checkedGenders" type="checkbox">
					{{ name }}
				</label>
			</div>
		</div>
	</div>
	<script>
		const url = 'http://vue-wordpress.dev/wp-json/wp/v2';
		const searchApp = new Vue({
			el: '#searchApp',
			data: {
				keywords: '',
				superheros: [],
				genders: [],
				checkedGenders: []
			},
			methods: {
				runSearch(keywords) {
					if ( 0 === this.checkedGenders.length && this.keywords === '' ) {
						return this.superheros = [];
					}
					if ( 0 === this.checkedGenders.length ) {
						axios.get(`${url}/superheros?search=${this.keywords}`)
							.then( response => this.superheros = response.data );
						return;
					}
					axios.get(`${url}/superheros?search=${this.keywords}&gender=${this.checkedGenders}`)
						.then( response => this.superheros = response.data );
				}
			},
			created() {
				axios.get(`${url}/gender`)
					.then( response => this.genders = response.data );
			}
		});
	</script>


	<?php
	return ob_get_clean();
}
