var gulp      = require('gulp');
var uglify    = require('gulp-uglify');
var coffee    = require('gulp-coffee');
var sass      = require('gulp-ruby-sass');
var prefix    = require('gulp-autoprefixer');
var gutil     = require('gulp-util');

/**
 * Generate JS from Coffee
 * @return {[type]} [description]
 */
gulp.task('coffee', function () {
  gulp.src('./src/coffee/**/*.coffee')
    .pipe(coffee({bare: true}).on('error', gutil.log))
    .pipe(uglify())
    .pipe(gulp.dest('./js'));
});

/**
 * Generates CSS from SASS
 * @return {[type]} [description]
 */
gulp.task('sass', function () {
  gulp.src('./src/scss/style.scss')
    .pipe(sass({
      style: 'compressed'
    }))
    .pipe(prefix('last 1 version'))
    .pipe(gulp.dest('./'));
});

/**
 * Watch files and run tasks if they change
 * @return {[type]} [description]
 */
gulp.task('watch', function () {
  gulp.watch('./src/coffee/**/*.coffee', ['coffee']);
  gulp.watch('./src/scss/**/*.scss', ['sass'])
});


/**
 * The default task (called when you run `gulp`)
 */
gulp.task('default', ['coffee', 'sass']);