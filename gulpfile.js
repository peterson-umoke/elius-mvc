// require plugins
var gulp = require('gulp');
var tsc = require('gulp-typescript');
var sass = require("gulp-sass");
var minjs = require("gulp-uglify");
var config = require("./gulp.config")();
var autoprefixer = require("gulp-autoprefixer");

gulp.task("tsc-compile",function() {
	var sourceTs = [
		config.inputTs
	];

	var tsResult = gulp
	.src(sourceTs)
	.pipe(tsc())
	
	return tsResult.js
			.pipe(gulp.dest(config.outputTs));
});

gulp.task('sass', function () {
  return gulp.src(config.inputSass)
    .pipe(sass({outputStyle:'expanded'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest(config.outputSass));
});

gulp.task("watch",function() {
	gulp.watch(config.inputSass, ['sass']);
	gulp.watch(config.inputTs,['tsc-compile']);
});

gulp.task("default",["sass","tsc-compile","watch"]);