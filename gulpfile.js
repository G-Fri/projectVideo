var gulp = require('gulp'),
  sass = require('gulp-sass'),
  bourbon = require('node-bourbon'),
  autoprefixer = require('gulp-autoprefixer'),
  browserSync = require('browser-sync').create(),
  useref = require('gulp-useref'),
  uglify = require('gulp-uglify'),
  minifyCss = require('gulp-minify-css'),
  gulpif = require('gulp-if'),
  imagemin = require('gulp-imagemin'),
  del = require('del'),
  runSequence = require('run-sequence');

gulp.task('scss', function() {
  return gulp.src('resources/assets/sass/*.scss')
    .pipe(sass({
      includePaths: require('node-bourbon').includePaths
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 35 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('public/css'))
    .pipe(browserSync.stream());
});

gulp.task('mobscss', function() {
  return gulp.src('resources/assets/mob/scss/*.scss')
    .pipe(sass({
      includePaths: require('node-bourbon').includePaths
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 35 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('public/mob/css'))
    .pipe(browserSync.stream());
});

gulp.task('watch', function() {
  gulp.watch('resources/assets/sass/*.scss', ['scss']);
  gulp.watch('resources/assets/mob/sass/*.scss', ['mobscss']);
  gulp.watch('public/*.html', browserSync.reload);
  gulp.watch('public/**/*.php', browserSync.reload);
  gulp.watch('resources/assets/js/**/*.js', browserSync.reload);
});

gulp.task('browserSync', function() {
  browserSync.init({
    proxy: "http://mamasharit:8888"
  });
});

gulp.task('useref', function() {
  return gulp.src('public/*.php')
    .pipe(useref())
    .pipe(gulpif('*.js'))
    .pipe(gulpif('*.css'))
    .pipe(gulp.dest('dist'));
});

gulp.task('images', function() {
  return gulp.src('public/img/**/*.+(png|jpg|jpeg|gif|svg)')
    .pipe(imagemin())
    .pipe(gulp.dest('dist/img'))
});

gulp.task('fonts', function() {
  return gulp.src('public/fonts/**/*')
    .pipe(gulp.dest('dist/fonts'))
});

gulp.task('libs', function() {
  return gulp.src('public/libs/**/*')
    .pipe(gulp.dest('dist/libs'))
});

gulp.task('clean', function() {
  del('dist');
});

gulp.task('build', function(callback) {
  runSequence('clean', 'scss', 'mobscss', 'useref', 'images', 'fonts', 'libs', callback);
});

gulp.task('default', function(callback) {
  runSequence(['scss', 'browserSync', 'watch'], callback)
});
