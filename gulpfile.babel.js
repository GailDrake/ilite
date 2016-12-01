/* jshint esversion:6 */

import gulp from 'gulp';
import browserSync from 'browser-sync';

import less from 'gulp-less';
import autoprefixer from 'gulp-autoprefixer';
import cssnano from 'gulp-cssnano';
import base64 from 'gulp-base64-inline';

import concat from 'gulp-concat';
import uglify from 'gulp-uglify';
import gulpIf from 'gulp-if';

var reload = browserSync.reload;

// -----  Set up for Linux & Mac  --------
// if you use this, comment out the Windows set up
// import php from 'gulp-connect-php';
//
// gulp.task('php', function() {
//   php.server({ base: 'build', port: 8010, keepalive: true});
// });
//
// gulp.task('browser-sync',['php'], function() {
//   browserSync({
//     proxy: '127.0.0.1:8010',
//     port: 8080,
//     open: true,
//     notify: false
//   });
// });
// ------- /end Linux & Mac setup --------



// -----  Set up for Windows  --------
// if you use this, comment out the Linux & Mac set up
gulp.task( 'browser-sync', function() {
  browserSync.init( {
    server: {
      baseDir: 'build'
    }
  });
});
// ------- /end Windows setup --------


// Watcher task
gulp.task('default', [
    'browser-sync',
    'less',
    'scripts'
  ], function () {
  gulp.watch(['build/*.php'], [reload]);
  gulp.watch( 'app/less/*.less', [
    'less'
  ]);
  gulp.watch( 'app/js/*.js', [
    'scripts'
  ]);
});


// Preprocess less
gulp.task( 'less', function() {
  return gulp.src( 'app/less/style.less' ) // specific file since I'm importing all less into main.less
    .pipe( less() )
    .pipe( base64() ) // options available: https://www.npmjs.com/package/gulp-base64
    .pipe( autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe( gulpIf( '*.css', cssnano())) // Put back in for Production
    .pipe( gulp.dest( 'build/css' ) )
    .pipe( reload({
      stream: true
    }));
});


// Concat javascript.
// This only works if all JS is in the same directory. Use gulp-useref if multiple dirs are needed
// Files are specified by name to determine order.
gulp.task( 'scripts', function() {
  return gulp.src( [
      // list all scripts here
      'app/js/ilite.js'
    ])
    .pipe( concat( 'ilite.min.js' ))  // Put back in when there are multiple scripts
    .pipe( gulpIf( '*.js', uglify()))  // Put back in for Production
    .pipe( gulp.dest( 'build/js/ilite' ))
    .pipe( reload({
      stream: true
    }));
});

// // Hot reload
// gulp.task( 'browserSync', function() {
//   browserSync.init( {
//     server: {
//       baseDir: 'build'
//     }
//   });
// });
//
// gulp.task('php', function() {
//   php.server({}, function (){
//     browserSync({
//       proxy: '127.0.0.1:8000'
//     });
//   });
//
//   gulp.watch('**/*.php').on('change', function () {
//     browserSync.reload();
//   });
// });
//
