var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concatCss = require('gulp-concat-css');
var concatJs = require("gulp-concat");
var minifyCss = require("gulp-minify-css");
var replace = require('gulp-replace');
var plumber = require('gulp-plumber');
var watch = require('gulp-watch');
var livereload = require('gulp-livereload');
var BASE_URL = 'http://localhost/jmf/public/';
var DESTINO = 'public/dist/';
var MEDIA = 'public/'

// -----------------------------------
function errorLog(error){
    console.error.bind(error);
    this.emit('end');
}
// -----------------------------------------

gulp.task('layout', function() {
    gulp.src([
        MEDIA + 'vendor/icon-awesome/fonts/*', 
        MEDIA + 'vendor/icon-line/fonts/*', 
        MEDIA + 'vendor/icon-hs/fonts/*', 
    ])
    .pipe(plumber())
    .pipe(gulp.dest(DESTINO));

    gulp.src([
        MEDIA + "vendor/bootstrap/bootstrap.min.css",
        MEDIA + "vendor/icon-line/css/simple-line-icons.css",
        MEDIA + "vendor/icon-awesome/css/font-awesome.min.css",
        MEDIA + "vendor/icon-hs/style.css",
        MEDIA + "vendor/hamburgers/hamburgers.min.css",
        MEDIA + "vendor/wait-animate.min.css",
        MEDIA + "vendor/animate.css",
        MEDIA + "vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css",
        MEDIA + "vendor/slick-carousel/slick/slick.css",
        MEDIA + "css/styles.op-construction.css",
        MEDIA + "css/custom.css"
    ])
    .pipe(plumber())
    .pipe(concatCss('construction.min.css'))
    .pipe(minifyCss())
    .pipe(replace('../icon-awesome/fonts', BASE_URL + 'dist'))
    .pipe(replace('../icon-line/fonts/Simple-Line', BASE_URL + 'dist/Simple-Line'))
    .pipe(replace('../icon-hs/fonts', BASE_URL + 'dist'))
    .pipe(gulp.dest(DESTINO));

    gulp.src([
        MEDIA + "vendor/jquery/jquery.min.js", 
        MEDIA + "vendor/jquery-migrate/jquery-migrate.min.js", 
        MEDIA + "vendor/jquery.easing/js/jquery.easing.js", 
        MEDIA + "vendor/popper.min.js", 
        MEDIA + "vendor/bootstrap/bootstrap.min.js", 
        MEDIA + "vendor/appear.js", 
        MEDIA + "vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js", 
        MEDIA + "vendor/slick-carousel/slick/slick.js", 
        MEDIA + "js/hs.core.js", 
        MEDIA + "js/components/hs.header.js", 
        MEDIA + "js/helpers/hs.hamburgers.js", 
        MEDIA + "js/components/hs.scroll-nav.js", 
        MEDIA + "js/components/hs.onscroll-animation.js", 
        MEDIA + "js/components/hs.tabs.js", 
        MEDIA + "js/components/hs.cubeportfolio.js", 
        MEDIA + "js/components/hs.carousel.js", 
        MEDIA + "js/components/hs.go-to.js", 
        MEDIA + "js/custom.js"
    ])
    .pipe(plumber())
    .pipe(concatJs('construction.min.js'))
    .pipe(gulp.dest(DESTINO));
});

gulp.task('dist', function() {
    gulp.src([
        MEDIA + 'vendor/icon-awesome/fonts/*', 
        MEDIA + 'vendor/icon-line/fonts/*', 
        MEDIA + 'vendor/icon-hs/fonts/*', 
    ])
    .pipe(plumber())
    .pipe(gulp.dest(DESTINO));

    gulp.src([
        MEDIA + 'vendor/bootstrap/bootstrap.min.css',
        MEDIA + 'vendor/icon-line/css/simple-line-icons.css',
        MEDIA + 'vendor/icon-awesome/css/font-awesome.min.css',
        MEDIA + 'vendor/icon-hs/style.css',
        MEDIA + 'vendor/hamburgers/hamburgers.min.css',
        MEDIA + 'vendor/wait-animate.min.css',
        MEDIA + 'vendor/animate.css',
        MEDIA + 'vendor/slick-carousel/slick/slick.css',
        MEDIA + 'vendor/jquery-portfolio/portfolio.jquery.css',
        MEDIA + 'css/styles.op-construction.css',
        MEDIA + 'css/custom.css',
    ])
    .pipe(plumber())
    .pipe(concatCss('dist.min.css'))
    .pipe(minifyCss())
    .pipe(replace('../icon-awesome/fonts', BASE_URL + 'dist'))
    .pipe(replace('../icon-line/fonts/Simple-Line', BASE_URL + 'dist/Simple-Line'))
    .pipe(replace('../icon-hs/fonts', BASE_URL + 'dist'))
    .pipe(gulp.dest(DESTINO));

    gulp.src([
        MEDIA + 'dist/idiomas.min.js',
        MEDIA + 'vendor/jquery/jquery.min.js',
        MEDIA + 'vendor/jquery-migrate/jquery-migrate.min.js',
        MEDIA + 'vendor/jquery.easing/js/jquery.easing.js',
        MEDIA + 'vendor/popper.min.js',
        MEDIA + 'vendor/bootstrap/bootstrap.min.js',
        MEDIA + 'vendor/appear.js',
        MEDIA + 'vendor/slick-carousel/slick/slick.js',
        MEDIA + 'vendor/jquery-portfolio/portfolio.jquery.js',
        MEDIA + 'js/hs.core.js',
        MEDIA + 'js/components/hs.header.js',
        MEDIA + 'helpers/hs.hamburgers.js',
        MEDIA + 'js/components/hs.scroll-nav.js',
        MEDIA + 'js/components/hs.onscroll-animation.js',
        MEDIA + 'js/components/hs.tabs.js',
        MEDIA + 'js/components/hs.carousel.js',
        MEDIA + 'js/components/hs.go-to.js',
        MEDIA + 'models/contacto_espaniol.js',
        MEDIA + 'models/contacto_ingles.js',
        MEDIA + 'views/_form_contacto.js',
        MEDIA + 'views/espaniol.js',
        MEDIA + 'views/ingles.js',
        MEDIA + 'layouts/site.js',
        MEDIA + 'routes/site.js',
        MEDIA + 'js/custom.js',
    ])
    .pipe(plumber())
    .pipe(concatJs('dist.min.js'))
    .pipe(gulp.dest(DESTINO));
});

gulp.task('idiomas', function() {
    gulp.src([
        MEDIA + 'bower_components/jquery/dist/jquery.min.js', 
        MEDIA + 'bower_components/bootstrap/dist/js/bootstrap.min.js', 
        MEDIA + 'bower_components/underscore/underscore-min.js',
        MEDIA + 'bower_components/backbone/backbone-min.js', 
        MEDIA + 'bower_components/backbone.marionette/lib/backbone.marionette.min.js', 
        MEDIA + 'bower_components/handlebars/handlebars.min.js'])
    .pipe(plumber())
    .pipe(concatJs('idiomas.min.js'))
    .pipe(gulp.dest(DESTINO));
});