var gulp = require('gulp'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    imagemin = require('gulp-imagemin'),
    mainBowerFiles = require('main-bower-files'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    filter = require('gulp-filter'),
    cleanCSS = require('gulp-clean-css'),
    browserSync = require('browser-sync').create();

var dirs = {
  srcJs: 'src/js',
  js: 'assets/js',
  css: 'assets/css',
  sass: 'src/sass',
  images: 'assets/images',
  fonts: 'assets/fonts'
};

gulp.task('scripts', function() {
  gulp.src(dirs.srcJs + '/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(uglify())
    .pipe(concat('main.js'))
    .pipe(gulp.dest(dirs.js));
});

gulp.task('sass', function() {
  gulp.src(dirs.sass + '/*.scss')
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .pipe(concat('main.css'))
    .pipe(gulp.dest(dirs.css));
});



gulp.task('bowerjs', function() {
  return gulp.src(mainBowerFiles())
    .pipe(filter('**/*.js'))
    .pipe(uglify())
    .pipe(concat('lib.js'))
    .pipe(gulp.dest(dirs.js));
});

gulp.task('bowercss', function() {
  return gulp.src(mainBowerFiles())
    .pipe(filter('**/*.css'))
    .pipe(cleanCSS())
    .pipe(concat('lib.css'))
    .pipe(gulp.dest(dirs.css));
});

gulp.task('bower', ['bowerjs', 'bowercss']);

gulp.task('minify', function() {
  gulp.src(dirs.css + '/*.css')
    .pipe(cleanCSS())
    .pipe(gulp.dest(dirs.css));

  gulp.src(dirs.js + '/*.js')
    .pipe(uglify())
    .pipe(gulp.dest(dirs.js));
});

gulp.task('image-min', function() {
  gulp.src(dirs.images + '/*.{jpg,gif}')
    .pipe(imagemin({
      optimizationLevel: 7,
      progressive: true
    }))
    .pipe(gulp.dest(dirs.images));
});

gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: 'marloscarmo.dev',
    notify: false
  });
});

gulp.task('watch', function() {
  gulp.watch(['*.php', 'assets/**/*.{css,js,jpg,gif,png,svg}'], function() {
    browserSync.reload();
  });

  gulp.watch(dirs.srcJs + '/*.js', function() {
    gulp.run('scripts');
  });

  gulp.watch(dirs.sass + '/*.scss', function() {
    gulp.run('sass');
  });
});

gulp.task('dev', ['browser-sync', 'watch']);
gulp.task('prod', ['minify', 'image-min', 'bower']);
