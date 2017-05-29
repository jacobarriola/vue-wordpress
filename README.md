# Vue WordPress
These are the Vue.js exercises for my WordCamp Orange County Vue workshop.

This theme includes some Vue basics as well as an instance that interacts with the WP REST API via a search with filters.

## Getting started
1. Create a new local WordPress site
    * Use `http://wordpress-vue.dev` as your local install
2. Add a Vue.js syntax highlighter to your code editor
3. Clone or download this theme inside of `wp-content/themes/`
4. Import the [database](https://github.com/jacobarriola/vue-wordpress/blob/master/database.sql) into your WordPress install (I'm using some dummy data and custom post types, so importing the 
database will make getting started easier).
    * `admin`/`password` is the user/password combo
5. Add the Vue.js [devtools Chrome extension](https://chrome.google.com/webstore/detail/vuejs-devtools/nhdogjmejiglipccpnnnanhbledajbpd) 

### Site URL
The database that you import assumes a local url of `http://vue-wordpress.dev`. 

🚨🚨 **If your local URL is not `http://vue-wordpress.dev`, add the site url and home url constants in `wp-config.php`:**

```php
/*
* 'Hey WordPress, here's the URL for my local install. Ignore what the database says.'
*/
 define( 'WP_SITEURL', 'http://yourlocalurl.whatever' );
 define( 'WP_HOME', 'http://yourlocalurl.whatever' );
```
Documentation for [WP_SITEURL](https://codex.wordpress.org/Editing_wp-config.php#WP_SITEURL).

Documentation for [WP_HOME](https://codex.wordpress.org/Editing_wp-config.php#WP_HOME).

## Endpoints
* View all Superheros: `http://vue-wordpress.dev/wp-json/wp/v2/superheros`
* Search for Superheros: `http://vue-wordpress.dev/wp-json/wp/v2/superheros?search=SEARCH_STRING&per_page=99`
* Search with Superheros gender filter: `http://vue-wordpress.dev/wp-json/wp/v2/superheros?search=SEARCH_STRING&gender=GENDER_IDS&per_page=99`
