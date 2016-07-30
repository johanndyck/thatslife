"use strict";

var gulp = require('gulp');
var gutil = require('gulp-util');
var compass = require('gulp-compass');

gulp.task('compass', function() {
	gulp.src('./sass/style.scss')
	.pipe(compass({
		css: './',
		sass: 'sass',
		style: 'expanded'
	}))
		.on('error', gutil.log)
});

gulp.task('watch', function() {
	gulp.watch('./sass/**/*.scss', ['compass']);
});

gulp.task('default', ['compass', 'watch']);