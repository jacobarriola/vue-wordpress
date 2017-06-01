const browserSync = require('browser-sync');

browserSync({
	proxy: 'http://vue-wordpress.dev',
	files: ['**/*.php'],
	notify: false
});