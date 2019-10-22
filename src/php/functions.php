<?php

require get_template_directory(). '/incDir/Project.php';

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
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_javascript');

//Customizer Sidebar
function themeslug_customize_register( $wp_customize ) {
  // Do stuff with $wp_customize, the WP_Customize_Manager object.
}
add_action( 'customize_register', 'themeslug_customize_register' );

//show_admin_bar( false ); //show or hide top admin bar