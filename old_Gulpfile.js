"use strict";

var gulp = require('gulp');
var gutil = require('gulp-util');
var compass = require('gulp-compass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('compass', function() {
	gulp.src('./sass/style.scss')
	.pipe(compass({
		config_file: 'config.rb'
	}))
		.on('error', gutil.log)
	.pipe(autoprefixer({browsers: ['last 2 versions', '> 1%']}))
	.pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
	gulp.watch('./sass/**/*.scss', ['compass']);
});

gulp.task('default', ['compass', 'watch']);