var gulp = require('gulp');

gulp.task('hello', gulp.series( function(done) {
  console.log('Hello gulp!');
  done();
}) );

gulp.task('default', gulp.task('hello'));
