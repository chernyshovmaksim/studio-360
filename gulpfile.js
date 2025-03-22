const { src, dest, series, parallel, watch } = require("gulp");
const browserSync = require("browser-sync").create();
const sourcemaps = require("gulp-sourcemaps");
const cssClean = require("gulp-clean-css");
const ttfToWoff = require("gulp-ttf-to-woff");

const server = () => {
    browserSync.init({
        proxy: "localhost",
    });
};

const blade = (cb) => {
    return src("./views/**/*.blade.php").pipe(browserSync.stream());
    cb();
};

const style = (cb) => {
    return src("./theme/css/**/*.css")
        .pipe(sourcemaps.init())
        .pipe(
            cssClean({
                level: 2,
            })
        )
        .pipe(sourcemaps.write())
        .pipe(dest("./theme/dist/css"))
        .pipe(browserSync.stream());
    cb();
};

const scripts = (cb) => {
    return src("./theme/js/**/*.js")
        .pipe(dest("./theme/dist/js"))
        .pipe(browserSync.stream());
    cb();
};

const watching = () => {
    watch(["./views/**/*.blade.php"], blade);
    watch(["./theme/css/**/*.css"], style);
    watch(["./theme/js/**/*.js"], scripts);
};

exports.default = parallel([server, watching, style, scripts]);
