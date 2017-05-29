var gutil = require('gulp-util');
var gulp = require('gulp');
var notify = require("gulp-notify");


var sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    rename = require('gulp-rename'),
    cleanCSS = require('gulp-clean-css'),
    strip = require('gulp-strip-css-comments'),
    browserSync = require('browser-sync').create();

var paths = {
  scss: 'assets/scss/main.scss',
  scssDestination: 'assets/css',
  scssSiteDestination: '_site/assets/css',
  js: 'assets/js/main.js',
};

gulp.task('sass', function(){
  return gulp.src(paths.scss)
  .pipe(sass()) // Using gulp-sass
  .pipe(cleanCSS({compatibility: 'ie8'}))
  .pipe(gulp.dest('assets/css/'))
  .pipe(notify({
    "title": "juliettecezzar",
    "subtitle": "new styles",
    "message": "Project reloaded.",
    "onLast": true,
    "sound": "Pop" // case sensitive
  }));
});

gulp.task('watch', function () {
  gulp.watch('assets/**/*', ['sass']);
});

gulp.task('default', ['watch']);