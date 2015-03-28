/*var elixir = require('laravel-elixir');*/


/* |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

/*elixir(function(mix) {
    mix.less('app.less');
});*/

var gulp = require('gulp'),
    gutil = require('gulp-util'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    less = require('gulp-less'),
    minify = require('gulp-minify-css');

var jsSource = [
  'bower_components/jquery/dist/jquery.js',
  'bower_components/uikit/js/uikit.js',
  'bower_components/uikit/js/components/slideshow.js',
  'bower_components/uikit/js/components/slideshow-fx.js',
  'bower_components/uikit/js/components/form-password.js',
  'dev_packages/js/ajaxService.js'
]

var lessSource = [
  'dev_packages/less/base.less',
  'dev_packages/less/login.less',
  'dev_packages/less/dashboard.less',
]

var cssSource = [
  'bower_components/uikit/css/uikit.min.css',
  'bower_components/uikit/css/components/form-password.min.css',
  'bower_components/uikit/css/components/form-file.min.css',
  'bower_components/uikit/css/components/dotnav.min.css',
  'bower_components/uikit/css/components/slideshow.min.css',
  'bower_components/uikit/css/components/progress.min.css',
  'dev_packages/css/style.css'
]


gulp.task('lessBuild',function(){
  gulp
    .src(lessSource)
    .pipe(less())
    .pipe(minify())
    .pipe(concat('style.css'))
    .pipe(gulp.dest('dev_packages/css'));
});

gulp.task('css',['lessBuild'],function(){
  gulp
    .src(cssSource)
    .pipe(minify())
    .pipe(concat('style.css'))
    .pipe(gulp.dest('assets/css'))
});

gulp.task('js',function(){
  gulp
    .src(jsSource)
    .pipe(concat('app.js'))
    .pipe(gulp.dest('assets/js'))
});

