"use strict";

var gulp = require('gulp'),
		gutil = require('gulp-util'),
		del = require('del'),
		postcss = require('gulp-postcss'),
		autoprefixer = require('autoprefixer'),
		sass = require('gulp-sass'),

		cssSources = './sass/style.scss',
	
		cssDest = './',
		
		watchList = [
			'./sass/**/*.scss'
		];

gulp.task('css', function() {
	gulp.src(cssSources)
	
	.pipe(sass().on('error', sass.logError))
	.pipe(postcss([
		autoprefixer({browsers: ['last 3 versions', '> 1%']})
	]))
	.pipe(gulp.dest(cssDest));
});

gulp.task('watch', function() {
	gulp.watch(watchList, ['css']);
});

gulp.task('default', ['css', 'watch']);