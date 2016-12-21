var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var svgstore = require('gulp-svgstore');
var minify = require('gulp-minify');



gulp.task('scripts', function(){
  return gulp.src('js/*.js')
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('js/main/'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minify())
    .pipe(gulp.dest('js/main/'))
});

gulp.task('default', function(){
  gulp.watch("js/*.js", ['scripts']);
});

gulp.task('svgstore', function() {
	return gulp
		.src('img/svg/*.svg')
		.pipe(svgstore())
		.pipe(rename({basename: 'sprite'}))
		.pipe(gulp.dest('./img'));
})

