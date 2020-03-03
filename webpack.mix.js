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

mix.js([
    'src/js/appIN.js',
    'src/js/ProjectModle.js',
    'src/js/UserModle.js',
    'src/js/CreatePage.js',
    'src/js/PosterModle.js',
    'src/js/Script_Modle.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/jquery/dist/jquery.js']//could look in the node_moduals also
    , 'src/php/app.js')
    .sass('src/css/mainStyle.scss', '../Synaptic/app.css')
    .copyDirectory('src/php/', '../Synaptic')  //copies the php folder contents to the parent dir.
    //.copy('src/php/*', './')  //copies the php folder contents to the parent dir.

    .browserSync({
        proxy: 'localhost/SynapticFire',
        port: 8000,
        files: [
            'src/**/*'
        ]     
    });

    
