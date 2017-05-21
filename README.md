# Vue WordPress
This is a demo theme I used for my
WordCamp Orange County Vue workshop.

## Getting started
1. Clone or download this theme inside of `wp-content/themes`
2. Import the database into your WordPress install (I'm using some dummy data and custom post types, so importing the 
database will make getting started easier).

### Site URL
The database that you import assumes a local url of `http://vue-wordpress.dev`. 

🚨🚨🚨🚨🚨 **If your local URL is not `http://vue-wordpress.dev`, add the site url and home url constants in `wp-config.php`:**

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
Superheros: `http://vue-wordpress.dev/wp-json/wp/v2/superheros`

Search: `http://vue-wordpress.dev/wp-json/wp/v2/superheros?search=SEARCH_STRING&per_page=99`

Search with categories filter: `http://vue-wordpress.dev/wp-json/wp/v2/superheros?search=SEARCH_STRING&superhero-category=CATEGORY_IDS&per_page=99`
