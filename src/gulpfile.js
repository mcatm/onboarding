var gulp = require('gulp');
var webserver = require('gulp-webserver');
var rename = require("gulp-rename");
var ejs = require("gulp-ejs");
var sass = require('gulp-sass');

gulp.task("css", (done) => {
  gulp
    .src("scss/**/*scss")
    .pipe(sass())
    .pipe(gulp.dest("./public/css"));
  done();
});

gulp.task("ejs", (done) => {
  gulp
    .src(["ejs/**/*.ejs", "!" + "ejs/**/_*.ejs"])
    .pipe(ejs({}, {}, {ext:'.html'}))
    .pipe(rename({ extname: ".html" }))
    .pipe(gulp.dest("./public"));
  done();
});

gulp.task('hello', gulp.series( function(done) {
  console.log('Hello gulp!');
  done();
}) );

gulp.task('server', gulp.series( function(done) {
  gulp.src('public')
    .pipe(webserver({
      livereload: true,
      open: true
    }));
  done();
} ));

gulp.task('default', gulp.task('hello'));
