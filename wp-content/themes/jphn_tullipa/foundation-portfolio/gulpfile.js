var gulp          = require('gulp');
var browserSync   = require('browser-sync').create();
var $             = require('gulp-load-plugins')();
var autoprefixer  = require('autoprefixer');

var minifyCSS = require('gulp-minify-css');


var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src'
];

//js
var vendorJsDir = 'node_modules/foundation-sites/assets';
var jsDir = '../assets/js/foundation.js';


function sass() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.postcss([
      autoprefixer({ browsers: ['last 2 versions', 'ie >= 9'] })
    ]))
    .pipe(gulp.dest('../assets/css'))
    .pipe(browserSync.stream())
    
   // .pipe(minifyCSS());
};

//js
// gulp.task('merge-foundation-js', function () {
//   return gulp.src([foundationJsDir + '/foundation.js', foundationJsDir + '/*.js'])
//       .pipe(concat('all-foundation.js'))
//       .pipe(gulp.dest(jsDir))
//       .pipe(notify({ message: "Foundation js merged" }))
//       .on('error', gutil.log);sqdd
// });

// merge all additional vendor js files
gulp.task('merge-vendor-js', function () {
  return gulp.src(vendorJsDir + '/*.js')
      .pipe(concat('all-vendor.js'))
      .pipe(gulp.dest(jsDir))
      .pipe(notify({message: "Vendor js merged"}))
      .on('error', gutil.log);
});
//js

function serve() {
  browserSync.init({
    server: "./"
  });

  gulp.watch("scss/*.scss", sass);
  gulp.watch("*.html").on('change', browserSync.reload);
}

gulp.task('sass', sass);
gulp.task('serve', gulp.series('sass', serve));
gulp.task('default', gulp.series('sass', serve));
