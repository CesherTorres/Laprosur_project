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
        'resources/plantillaLogin/css/font-awesome.min.css',
        'resources/plantillaLogin/css/simple-line-icons.min.css',
        'resources/plantillaLogin/css/style.css'
    ], 'public/css/plantilla.css')

.scripts([
    'resources/plantillaLogin/js/bootstrap.min.js',
    'resources/plantillaLogin/js/Chart.min.js',
    'resources/plantillaLogin/js/jquery.min.js',
    'resources/plantillaLogin/js/pace.min.js',
    'resources/plantillaLogin/js/popper.min.js',
    'resources/plantillaLogin/js/template.js'
 ], 'public/js/plantilla.js');
