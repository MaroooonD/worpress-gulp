require('es6-promise').polyfill();
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const jshint = require('gulp-jshint');
const uglify = require('gulp-uglify');
const rename = require("gulp-rename");
const imagemin = require('gulp-imagemin');
const browserSync = require('browser-sync').create();
const plumber = require("gulp-plumber");

const onError = function (err) {
    console.log('An error occurred:', gutil.colors.magenta(err.message));
    gutil.beep();
    this.emit('end');
};

gulp.task('php', function () {
    return gulp.src('./*.php')
        .pipe(gulp.dest('./'))
});

gulp.task('sass', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./css/'))
});

gulp.task('css', function () {
    return gulp.src('./css/**.css')
        .pipe(gulp.dest('./css/'))
});

gulp.task('js', function () {
    return gulp.src(['./js/*.js'])
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(concat('app.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('./js/min/'))
});

gulp.task('images', function () {
    return gulp.src('./images/src/*')
        .pipe(plumber({errorHandler: onError}))
        .pipe(imagemin({optimizationLevel: 7, progressive: true}))
        .pipe(gulp.dest('./images/dist'));
});

gulp.task('watch', function () {
    browserSync.init({
        proxy: 'http://localhost:8001',
        files: ['./**.php', './css/**.css', './js/min/**.js']
    });
    gulp.watch('./*.php', gulp.series['php']);
    gulp.watch('./sass/**/*.scss', gulp.series(['sass']));
    gulp.watch('./js/*.js', gulp.series(['js']));
    gulp.watch('images/src/*', gulp.series(['images']));
});

gulp.task('default', gulp.series(['sass', 'js', 'images', 'watch']));
