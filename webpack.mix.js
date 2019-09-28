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

mix.js('src/app.js', './')
    .sass('src/app.scss', './')
    .browserSync({
        proxy: 'localhost/SynapticFire',
        port: 8000,
        files: [
            'src/**/*'
           


        ]     
    });
     //'src/app.js'
    //project.dev