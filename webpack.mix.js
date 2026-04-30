const mix = require('laravel-mix');

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

mix.setPublicPath('/')
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .copy('public/css/app.css', 'css/app.css')
    .copy('public/js/app.js', 'js/app.js')
    .sourceMaps();

// Disable WebpackBar to avoid ProgressPlugin validation error
mix.override((config) => {
    config.plugins = config.plugins.filter(
        plugin => plugin.constructor.name !== 'WebpackBarPlugin'
    );
});
