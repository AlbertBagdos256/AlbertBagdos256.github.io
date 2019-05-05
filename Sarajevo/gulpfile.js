var gulp = require('gulp');
var watch = require('gulp-watch');
var browserSync = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var csso = require("gulp-csso");
var rename = require("gulp-rename");
var sourcemaps = require('gulp-sourcemaps');
var gcmq = require('gulp-group-css-media-queries');
var less = require('gulp-less');
var plumber = require('gulp-plumber');



gulp.task('style', style);

function style() {
    return gulp.src('./app/less/style.less')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(gcmq())
        .pipe(autoprefixer({
            browsers: ['last 15 versions', '> 1%', 'ie 8', 'ie 7']
        }))
        .pipe(gulp.dest('./app/css'))
        .pipe(csso())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./app/css'))
        .pipe(browserSync.stream());
}

gulp.task('watch', function () {
    watch('./app/less/**/*.less', style);
    watch('./app/**/*.html', browserSync.reload);
    watch('./app/js/**/*.js', browserSync.reload);
    watch('./app/img/**/*.*', browserSync.reload);
})

gulp.task('server', function () {
    browserSync.init({
        server: {
            baseDir: './app/'
        },
        notify: true,
        port: 9000
    });
});

gulp.task('default', ['style', 'server', 'watch'])







