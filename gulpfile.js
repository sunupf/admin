var gulp = require('gulp'),
    gutil = require('gulp-util'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    less = require('gulp-less'),
    minify = require('gulp-minify-css'),
    concatCSS = require('gulp-concat-css');

var jsSource = [
  'bower_components/jquery/dist/jquery.js',
  'bower_components/fullpage.js/jquery.fullPage.js',
  'bower_components/uikit/js/uikit.js',
  'bower_components/uikit/js/components/form-password.js',
]

var lessSource = [
  'dev_packages/less/base.less',
  'dev_packages/less/login.less'
]

var cssSource = [
  'bower_components/uikit/css/uikit.css',
  'bower_components/uikit/css/components/dotnav.css',
  'bower_components/uikit/css/components/form-password.css',
  'bower_components/fullpage.js/jquery.fullPage.css',
  'dev_packages/css/style.css'
]

var taskDefault = [
  'less',
  'js',
  'css'
]

gulp.task('js',function(){
  gulp
    .src(jsSource)
    .pipe(uglify())
    .pipe(concat('app.js'))
    .pipe(gulp.dest('assets/js'))
});

gulp.task('less',function(){
  gulp
    .src(lessSource)
    .pipe(less())
    .pipe(minify())
    .pipe(concatCSS('style.css'))
    .pipe(gulp.dest('dev_packages/css'));
});

gulp.task('css',function(){
  gulp
    .src(cssSource)
    .pipe(minify())
    .pipe(concatCSS('style.css'))
    .pipe(gulp.dest('assets/css'))
});

gulp.task('default',function(){
  gulp.run(taskDefault);
  gulp.watch(lessSource, taskDefault);
});