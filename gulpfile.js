var gulp = require('gulp'),
    gutil = require('gulp-util'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    less = require('gulp-less'),
    minify = require('gulp-minify-css'),
    concatCSS = require('gulp-concat-css');

var jsSource = [
  'bower_components/jquery/dist/jquery.js',
//  'bower_components/fullpage.js/jquery.fullPage.js',
  'bower_components/uikit/js/uikit.js',
  'bower_components/uikit/js/components/form-password.js'
]

var loginLess = [
  'dev_packages/less/base.less',
  'dev_packages/less/login.less'
]

var cssSource = [
  'bower_components/uikit/css/uikit.min.css',
  'bower_components/uikit/css/components/dotnav.min.css',
  'bower_components/uikit/css/components/form-password.min.css',
//  'bower_components/fullpage.js/jquery.fullPage.min.css'
  'dev_packages/css/style.css'
]

var taskDefault = [
  'loginLessBuild',
  'js',
  'css'
]

var dashboardLess = [
  'dev_packages/less/base.less',
  'dev_packages/less/dashboard.less'
]

var cssDashboardSource = [
  'bower_components/uikit/css/uikit.min.css',
  'bower_components/uikit/css/components/datepicker.min.css',
  'dev_packages/css/dashboard.css'
]

var jsDashboardSource = [
  'bower_components/jquery/dist/jquery.js',
  'bower_components/uikit/js/uikit.js',
  'bower_components/uikit/js/components/datepicker.js'
]

var taskDashboard = [
  'dashboardLessBuild',
  'cssDahsboard',
  'jsDashboard'
]


// Login

gulp.task('js',function(){
  gulp
    .src(jsSource)
    .pipe(uglify())
    .pipe(concat('app.js'))
    .pipe(gulp.dest('assets/js'))
});

gulp.task('loginLessBuild',function(){
  gulp
    .src(loginLess)
    .pipe(less())
    .pipe(minify())
    .pipe(concatCSS('style.css'))
    .pipe(gulp.dest('dev_packages/css'));
});

gulp.task('css',['loginLessBuild'],function(){
  gulp
    .src(cssSource)
    .pipe(minify())
    .pipe(concatCSS('style.css'))
    .pipe(gulp.dest('assets/css'))
});

// Dashboard 

gulp.task('jsDashboard',function(){
  gulp
    .src(jsDashboardSource)
    .pipe(uglify())
    .pipe(concat('dashboard.js'))
    .pipe(gulp.dest('assets/js'))
});

gulp.task('cssDahsboard',['dashboardLessBuild'],function(){
  gulp
    .src(cssDashboardSource)
    .pipe(minify())
    .pipe(concatCSS('dashboard.css'))
    .pipe(gulp.dest('assets/css'))
});

gulp.task('dashboardLessBuild',function(){
  gulp
    .src(dashboardLess)
    .pipe(less())
    .pipe(minify())
    .pipe(concatCSS('dashboard.css'))
    .pipe(gulp.dest('dev_packages/css'));
});


gulp.task('default',function(){
  gulp.run(taskDefault);
  gulp.watch(loginLess, taskDefault);
});

gulp.task('dashboard',function(){
  gulp.watch(dashboardLess, taskDashboard);
});

