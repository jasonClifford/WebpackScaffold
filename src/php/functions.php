<?php

require get_template_directory(). '/incDir/Project.php';
require get_template_directory(). '/incDir/CreatePages.php';
require get_template_directory(). '/incDir/MustLogin.php';

// function load_bootstrap(){
//     wp_register_style('load_bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', '', 1,'all');
//     wp_enqueue_style('load_bootstrap');
 
// }
// add_action('wp_enqueue_scripts', 'load_bootstrap');



function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/app.css', '', 1,'all');
    wp_enqueue_style('stylesheet');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript(){
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    ////////////////////////get ajax localized
	wp_localize_script( 'custom', 'postdata', array(
        'ajax_url'   => admin_url( 'admin-ajax.php' ),
        'ajax_nonce' =>wp_create_nonce( 'Cr3ateP@geN0nce' ), //Create nonce and send it to js file in postdata.ajax_nonce.
         ));       //https://www.creare.co.uk/blog/wp/wp-localize-script-wordpress
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

function load_jQuery(){
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'load_jQuery');




////////////////////////////////  SHOW HIDE ADMIN BAR  //////////////////////////////////////////////////////

show_admin_bar( false ); //show or hide top admin bar

///////////////////////////////  SHOW HIDE ADMIN BAR  //////////////////////////////////////////////////////

