var elixir = require('laravel-elixir');
var gulp = require('gulp');
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
	mix.sass('app.scss');
});

gulp.task('sonar', function (callback) {
	var sonarqubeScanner = require('sonarqube-scanner');
	sonarqubeScanner({
		serverUrl : "https://sonarqube.com",
		token : "f03cb72e1cbaafc0466eb9c8d2fde0e4af9b55e5",
		options : {
			'sonar.projectBaseDir': './app',
			'sonar.language':'php',
			'sonar.sourceEncoding':'UTF-8'
		}
	}, callback);
});

