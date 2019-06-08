var path = {
    build: {
        js: './public/build/',
        css: './public/build/',
        assets: './public/build/assets/'
    },
    src: {
        js: [
            './node_modules/jquery/dist/jquery.js',
            './node_modules/bootstrap/dist/js/bootstrap.min.js',
            './node_modules/admin-lte/dist/js/adminlte.min.js',
            './resources/js/admin/script.js',
        ],
        css: [
            './node_modules/bootstrap/dist/css/bootstrap.min.css',
            './node_modules/bootstrap/dist/css/bootstrap-theme.min.css',
            './node_modules/font-awesome/css/font-awesome.css',
            './node_modules/admin-lte/dist/css/AdminLTE.min.css',
            './node_modules/admin-lte/dist/css/skins/_all-skins.min.css',
            './resources/css/admin/style.css'
        ]
    },
    watch: {
        css: [
            './resources/css/**/*.css'
        ]
    },
    clean: './public/build/'
};
var gulp = require('gulp'),
    concat = require('gulp-concat'),
    cleanCSS = require('gulp-clean-css'),
    cssRebase = require('gulp-css-rebase'),
    del = require('del'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch');

sass.compiler = require('node-sass');

gulp.task('default', [
    'build:clear',
    'build:js',
    'build:css'
]);

gulp.task('build:clear', function () {
    del.sync(path.clean);
});

gulp.task('build:js', function () {
    gulp.src(path.src.js)
        .pipe(concat('bundle.js'))
        .pipe(uglify())
        .pipe(gulp.dest(path.build.js));
});
gulp.task('build:css', function () {
    gulp.src(path.src.css)
        .pipe(cssRebase({
            output_css: path.build.css,
            output_assets: path.build.assets,
            overwrite: false
        }))
        .pipe(concat('bundle.css'))
        .pipe(cleanCSS({level: {1: {specialComments: 0}}}))
        .pipe(gulp.dest(path.build.css));
});

gulp.task('watch', function () {
    watch(path.watch.css, function(event, cb) {
        gulp.start('build:css');
    });
});