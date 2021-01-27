const gulp = require('gulp');
const rename = require("gulp-rename");
const ejs = require("gulp-ejs");
const replace = require("gulp-replace");
const notify = require("gulp-notify");
const plumber = require("gulp-plumber");
// const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync');
const imagemin = require('gulp-imagemin');
const mozjpeg = require('imagemin-mozjpeg');
const pngquant = require('imagemin-pngquant');
const changed = require('gulp-changed');

//setting : paths
const paths = {
  'root': './dist/',
  'html': './dist/index.html',
  // 'cssSrc': './src/assets/scss/**/*.scss',
  'imgSrc': './src/assets/img/**',
  'jsSrc': './src/assets/js/**.js',
  'ejsSrc': './ejs/*.ejs',
  // 'cssDist': './dist/assets/css/',
  'imgDist': './dist/assets/img/',
  'jsDist': './dist/assets/js/'
}

//gulpコマンドの省略
const { watch, series, task, src, dest, parallel } = require('gulp');

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
    .pipe(gulp.dest());
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

// imagemin
gulp.task("imagemin", function () {
  return gulp
    .src(paths.imgSrc)
    .pipe(changed(paths.imgDist))
    .pipe(
      imagemin([
        pngquant({
          quality: [.60, .70], // 画質
          speed: 1 // スピード
        }),
        mozjpeg({ quality: 65 }), // 画質
        imagemin.svgo(),
        imagemin.optipng(),
        imagemin.gifsicle({ optimizationLevel: 3 }) // 圧縮率
      ])
    )
    .pipe(gulp.dest(paths.imgDist));
});

//watch
task('watch', (done) => {
  // watch([paths.cssSrc], series('sass', 'reload'));
  watch([paths.jsSrc], series('js', 'reload'));
  watch([paths.ejsSrc], series('ejs', 'reload'));
  watch([paths.html], gulp.task('reload'));
  watch(['./src/assets/img/**'], gulp.task('imagemin'));
  done();
});
task('default', parallel('watch', 'browser-sync'));