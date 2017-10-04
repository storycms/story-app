const mix = require('laravel-mix');
const webpack = require('webpack');

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

mix
    .setResourceRoot('/themes/default/build/')
    .setPublicPath('build')
    .js('resources/assets/js/app.js', 'js/')
    .sass('resources/assets/sass/app.sass', 'css/')
    .copy('resources/assets/images', 'build/images/')
    .sourceMaps();


mix.webpackConfig({
    plugins: [
        new webpack.IgnorePlugin(/^\.\/locale$/, /moment$/)
    ],
    resolve: {
        alias: {
          'icons': path.resolve(__dirname, "./node_modules/vue-material-design-icons")
        },
        extensions: [
          ".vue"
        ]
    }
});
