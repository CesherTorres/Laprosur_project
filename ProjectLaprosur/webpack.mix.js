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

 mix.styles([
        'resources/plantilla/css/font-awesome.min.css',
        'resources/plantilla/css/simple-line-icons.min.css',
        'resources/plantilla/css/style.css',
    ], 'public/css/plantilla.css')

.scripts([
    'resources/plantilla/css/bootstrap.min.css',
    'resources/plantilla/css/Chart.min.css',
    'resources/plantilla/css/jquery.min.css',
    'resources/plantilla/css/pace.min.css',
    'resources/plantilla/css/popper.min.css',
    'resources/plantilla/css/template.css',
 ], 'public/css/plantilla.js');
