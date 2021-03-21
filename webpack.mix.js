const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])


    /*Person views*/
    .styles('resources/views/person/css/reset.css', 'public/person/css/reset.css')
    .styles('resources/views/person/css/estilo.css', 'public/person/css/estilo.css')
    /*Person views*/

    /*Auth views*/
    .styles('resources/views/auth/css/reset.css', 'public/auth/css/reset.css')
    .styles('resources/views/auth/css/style.css', 'public/auth/css/style.css')
    /*Auth views*/

    /*Permission views*/
    .styles('resources/views/person/permission/css/style.css', 'public/person/permission/css/style.css')
    .styles('resources/views/person/permission/css/reset.css', 'public/person/permission/css/reset.css')
    /*Permission views*/
.version();
