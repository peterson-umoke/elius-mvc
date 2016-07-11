module.exports = function() {
	var config = {
		inputTs  : './assets/sources/typescript/**/*.ts',
		outputTs : './assets/builds/js/',
		inputSass : "./assets/sources/scss/**/*.scss",
		outputSass : "./assets/builds/css/"
	}

	return config;
}