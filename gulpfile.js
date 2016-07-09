// require plugins
var gulp  = require("gulp");
var sass = require("gulp-sass");
var typescript = require("gulp-typescript");
var autoprefixer = require("autoprefixer");

// paths
var sass_dir = "./assets/sources/sass/**/*.scss";
var ts_dir = "./assets/sources/typescript/**/*.ts";
var sass_output = "./assets/builds/css";
var ts_output = "./assets/builds/js/";

gulp.task("compile-sass",function(){
	return gulp
    // Find all `.scss` files from the `stylesheets/` folder
    .src(sass_dir)
    // Run Sass on those files
    .pipe(sass())
    // Write the resulting CSS in the output folder
    .pipe(gulp.dest(sass_output));
});