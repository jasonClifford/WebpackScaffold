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
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/jquery/dist/jquery.min.js']
    , 'src/php/js/app.js')
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
    
    //'src/app.js'
    //project.dev
    //.copy('src/php/_front-page.php', './front-page.php')  //allows for renaming files
    //.copy('src/php/_functions.php', './functions.php')
    // mix.js([
    //     'node_modules/jquery/dist/jquery.min.js',
    //     'node_modules/bootstrap/dist/js/bootstrap.js',
    //     'resources/assets/js/app.js'], 'public/js');