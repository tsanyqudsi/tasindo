const mix = require('laravel-mix'),
    workboxPlugin = require('workbox-webpack-plugin');

mix.webpackConfig({
    resolve: {
        plugins: [
            new workboxPlugin.GenerateSW({
                swDest: 'sw.js',
                clientsClaim: true,
                skipWaiting: true,
              })
        ]
    }
});

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
