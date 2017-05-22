<?php
get_header(); ?>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>

<!--<div id="app">-->
<!--    The value is of 'message' is <strong>{{ message }}</strong>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    const app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            message: 'Hello Vue'-->
<!--        }-->
<!--    });-->
<!--</script>-->

<!--<div id="app2">-->
<!--    <div v-for="superhero in superheros" v-show="superhero.canFly">-->
<!--        {{ superhero.name }} - {{ superhero.canFly }}-->
<!--    </div>-->
<!--</div>-->

<!--<script>-->
<!--	const app2 = new Vue({-->
<!--		el: '#app2',-->
<!--		data: {-->
<!--            superheros: [-->
<!--                { name: 'Batman', canFly: false },-->
<!--                { name: 'Superwoman', canFly: true },-->
<!--                { name: 'Wonder Woman', canFly: true },-->
<!--                { name: 'Bat Girl', canFly: false }-->
<!--            ]-->
<!--		}-->
<!--	});-->
<!--</script>-->

<!--<div id="app3">-->
<!--    <div v-for="superhero in superheros">-->
<!--        {{ superhero }}-->
<!--    </div>-->
<!--    <input type="text" v-model="newSuperhero">-->
<!--    <button v-on:click="addSuperhero(newSuperhero)">Add Superhero</button>-->
<!--</div>-->
<!--<script>-->
<!--    const app3 = new Vue({-->
<!--        el: '#app3',-->
<!--        data: {-->
<!--        	newSuperhero: '',-->
<!--        	superheros: [-->
<!--        		'Bat Woman',-->
<!--                'Wonder Woman',-->
<!--                'Superman'-->
<!--            ]-->
<!--        },-->
<!--        methods: {-->
<!--        	addSuperhero(newSuperHero) {-->
<!--        		this.superheros.push(newSuperHero);-->
<!--        		this.newSuperhero = '';-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->

<!--<div id="app4">-->
<!--    <ul>-->
<!--        <li v-for="category in categories">-->
<!--            <label :for="category">-->
<!--                <input :id="category" :value="category" v-model="checkedCategories" type="checkbox">-->
<!--                {{ category }}-->
<!--            </label>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <p>Checked categories: {{ checkedCategories }}</p>-->
<!--</div>-->
<!--<script>-->
<!--    const app4 = new Vue({-->
<!--        el: '#app4',-->
<!--        data: {-->
<!--        	categories: [ 'fly', 'male', 'female', 'movie' ],-->
<!--            checkedCategories: [],-->
<!--        }-->
<!--    })-->
<!--</script>-->

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
wp_footer();