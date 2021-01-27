var gulp = require('gulp');
var rename = require("gulp-rename");
var ejs = require("gulp-ejs");
var replace = require("gulp-replace");
var notify = require("gulp-notify");
var plumber = require("gulp-plumber");
// var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync');

//setting : paths
var paths = {
  'root': './dist/',
  'html': './dist/**/*.html',
  // 'cssSrc': './src/scss/**/*.scss',
  // 'cssDist': './dist/css/',
  'jsSrc': './src/js/**/*.js',
  'jsDist': './dist/js/',
  'ejsSrc': './ejs/**/*.ejs'
}

//gulpコマンドの省略
var { watch, series, task, src, dest, parallel } = require('gulp');

//Sass
// task('sass', function () {
//   return (
//     src(paths.cssSrc)
//       .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))
//       .pipe(sass({
//         outputStyle: 'expanded'// Minifyするなら'compressed'
//       }))
//       .pipe(autoprefixer({
//         browsers: ['ie >= 11'],
//         cascade: false,
//         grid: true
//       }))
//       .pipe(dest(paths.cssDist))
//   );
// });

//ejs
gulp.task('ejs', (done) => {
  gulp
    .src(['ejs/**/*.ejs', '!' + 'ejs/**/_*.ejs'])
    .pipe(ejs({}, {}, { ext: '.html' }))
    .pipe(rename({ extname: '.html' }))
    .pipe(replace(/[\s\S]*?(<!DOCTYPE)/, '$1'))
    .pipe(gulp.dest('./dist/'));
  done();
});

//JS Compress
task('js', function () {
  return (
    src(paths.jsSrc)
      .pipe(plumber())
      .pipe(uglify())
      .pipe(dest(paths.jsDist))
  );
});

// browser-sync
task('browser-sync', () => {
  return browserSync.init({
    port: 8080,
    server: {
      baseDir: paths.root,
      index: 'index.html'
    },
    reloadOnRestart: true
  });
});

// browser-sync reload
task('reload', (done) => {
  browserSync.reload();
  done();
});

//watch
task('watch', (done) => {
  // watch([paths.cssSrc], series('sass', 'reload'));
  watch([paths.jsSrc], series('js', 'reload'));
  watch([paths.ejsSrc], series('ejs', 'reload'));
  watch([paths.html], gulp.task('reload'));
  done();
});
task('default', parallel('watch', 'browser-sync'));