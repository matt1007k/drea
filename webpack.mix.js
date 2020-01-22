const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);

// mix.styles(["resources/vendor/mdb/css/mdb.min.css"], "public/css/mdb.min.css");
// .js("resources/vendor/mdb/js/mdb.min.js", "public/js");

mix.browserSync({
    proxy: "http://localhost:8000",
    open: false
});
