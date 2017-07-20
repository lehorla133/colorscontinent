var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    connect = require('gulp-connect-php'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    stripCssComments = require('gulp-strip-css-comments'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch');

gulp.task('serve', ['copylibrary', 'copyplugins', 'sass'], function() {
    connect.server({}, function() { browserSync({proxy: '127.0.0.1:8000'}); }); // Connect to localhost
    gulp.watch('assets/scss/**/*.scss', ['sass']); // Watch .scss files being changed (Browser reloading in task 'sass')
    gulp.watch([
        'site/**/*.php',
        'site/blueprints/*.yml'
    ]).on('change', browserSync.reload);  // Watch .php files in 'site' and blueprints being changed, if: Reload browser
});

gulp.task('copylibrary', function() {
    return gulp.src('./bower_components/jquery/dist/jquery.js') // Get file(s)
    .pipe(uglify()) // Minify the outputted file
    .pipe(rename({suffix: '.min'})) // Rename the outputted file by adding suffix 'min'
    .pipe(gulp.dest('assets/js/vendor')); // Put here
});

gulp.task('copyplugins', function() {
    return gulp.src([
        './bower_components/bootstrap-sass/assets/javascripts/bootstrap.js'
        // Add more plugins here, i. e. Ekko Lightbox, Modernizer etc.
    ]) // Get file(s)
    .pipe(sourcemaps.init()) // Create a sourcemap
    .pipe(concat('plugins.min.js')) // Bundle all files into this one
    .pipe(uglify()) // Minify the outputted file
    .pipe(sourcemaps.write('../../maps')) // Put sourcemap here
    .pipe(gulp.dest('assets/js/vendor')); // Put here
});

gulp.task('sass', function() {
    return gulp.src('assets/scss/**/*.scss') // Get all .scss files
    .pipe(sourcemaps.init()) // Create a sourcemap
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)) // Minify the outputted file
    .pipe(autoprefixer()) // Add vendor prefixes to styles
    .pipe(rename({suffix: '.min'})) // Rename the outputted file by adding suffix 'min'
    .pipe(sourcemaps.write('../maps')) // Put sourcemap here
    .pipe(stripCssComments({preserve: false})) // Get rid of stylesheet comments
    .pipe(gulp.dest('assets/css')) // Put here
    .pipe(browserSync.stream()); // Reload browser
});

gulp.task('default', ['serve']); // Execute on command 'gulp'
