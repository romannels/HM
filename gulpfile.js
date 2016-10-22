//var gulp = require('gulp');
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass([
	'app.scss'	
	], 'public/assets/css');
	
    mix.browserSync();

    mix.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/assets/js/bootstrap.min.js');
   
    mix.copy('node_modules/bootstrap-sass/assets/fonts/', 'public/assets/fonts/');
});

//gulp.task('default', function() {
	  // place code for your default task here
// });
