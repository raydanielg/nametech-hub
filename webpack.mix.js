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

mix.setPublicPath('public')
    .js('resources/js/app.js', 'js')
    .sass('resources/sass/app.scss', 'css')
    .postCss('resources/css/app.css', 'css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .sourceMaps();

// Disable WebpackBar to avoid ProgressPlugin validation error
mix.override((config) => {
    config.plugins = config.plugins.filter(
        plugin => plugin.constructor.name !== 'WebpackBarPlugin'
    );
});
