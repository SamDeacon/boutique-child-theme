/*
*   BASE GULPFILE: SAM DEACON 31.01.16
*   NOTE: WRITTEN FOR USE WITHIN WORDPRESS CHILD THEME
*   NOTE: FOR USE USING CLOUD9 IDE (c9.io)
*/


var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync');

gulp.task('browser-sync', function() {
    
    
    
browserSync({
// You can use wildcards in here.
files: 'functions.php, style.css',
// We can pick port 8081 or 8082, if you are more of a 2's kind of guy, go for the 8082. Highly recommended.
port: 8082

});


});

gulp.task('sass', function () {
  gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./scss/**/*.scss', ['sass']);
});


gulp.task('sync-sass', ['sass:watch', 'browser-sync']);