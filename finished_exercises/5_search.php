<?php

namespace Vue_WP;

function get_search_exercise() {

	ob_start(); ?>

    <div id="searchApp">
        <h1>Search for a superhero 🕵️🚀‍️</h1>
        <form v-on:submit.prevent="runSearch">
            <input type="text" placeholder="Enter a name" v-model="keyword">
            <button>Search</button>
        </form>
        <ul class="genders">
            <li v-for="gender in genders">
                <label v-bind:for="gender.id">
                    <input v-on:click="runSearch" v-bind:id="gender.id" v-bind:value="gender.id" type="checkbox" v-model="clickedGenders">
                    {{ gender.name }} ({{ gender.count }})
                </label>
            </li>
        </ul>
        <ul class="list">
            <li class="superhero" v-for="superhero in superheros">
                <h3>{{superhero.title.rendered}}</h3>
                <p v-html="superhero.content.rendered" v-if="superhero.content.rendered"></p>
                <a v-bind:href="superhero.link">Read More -></a>
            </li>
        </ul>
    </div>
	<script>
		const endpoint = 'http://vue-wordpress.dev/wp-json/wp/v2';
		const searchApp = new Vue({
			el: '#searchApp',
			data: {
				keyword: '',
				superheros: [],
				genders: [],
				clickedGenders: []
			},
			methods: {
				runSearch() {
					if ( 0 === this.clickedGenders.length ) {
						return this.keywordSearch();
					}
					axios.get(`${endpoint}/superheros?search=${this.keyword}&gender=${this.clickedGenders}`).then(response => this.superheros = response.data);
				},
				keywordSearch() {
					axios.get(`${endpoint}/superheros?search=${this.keyword}`).then(response => this.superheros = response.data);
				}
			},
			created() {
				this.keywordSearch();
				axios.get(endpoint + '/gender').then(response => this.genders = response.data);
			}
		});
	</script>


	<?php
	return ob_get_clean();
}
