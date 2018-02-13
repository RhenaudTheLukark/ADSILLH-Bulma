const gulp = require('gulp');
const config = require("../config");
const reload = require('browser-sync').reload;

gulp.task('watch',['browsersync'], function() {
    gulp.watch("*.html").on("change", reload);
    gulp.watch("./css/*.css").on("change", reload);
    gulp.watch("./js/**/*.css").on("change", reload);
});