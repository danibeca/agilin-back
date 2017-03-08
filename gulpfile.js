var elixir = require('laravel-elixir');
var gulp = require('gulp');
var phpunit = require('gulp-phpunit');
var notify = require('gulp-notify')
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

elixir(function (mix) {
    mix.sass('app.scss');
});

gulp.task('sonar', function (callback) {
    var sonarqubeScanner = require('sonarqube-scanner');
    sonarqubeScanner({
        serverUrl: "https://sonarqube.com",
        token: "f03cb72e1cbaafc0466eb9c8d2fde0e4af9b55e5",
        options: {
            'sonar.projectBaseDir': './',
            'sonar.sources': 'app',
            'sonar.exclusions':'app/Providers/**/*.php,' +
                               'app/Http/Middleware/**/*.php,' +
                               'app/Http/Requests/**/*.php,' +
                               'app/Http/Kernel.php,' +
                               'app/Console/Kernel.php,' +
                               'tests/**/*.php',
            'sonar.language': 'php',
            'sonar.tests': 'tests',
            'sonar.php.coverage.reportPath': 'reports/phpunit.coverage.xml',
            'sonar.php.tests.reportPath': 'reports/phpunit.xml'

        }
    }, callback);
});

gulp.task('test', function () {
    var options = {
        debug: false,
        notify: true,
        coverageClover: './reports/phpunit.coverage.xml',
        logJunit: './reports/phpunit.xml'
    };
    gulp.src('tests/**/*.php')
        .pipe(phpunit('', options))
        .on('error', notify.onError({
            title: "Failed Tests!",
            message: "Error: <%= error.message %>"
        }));
});