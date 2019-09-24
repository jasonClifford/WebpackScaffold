<?php


function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri(). '/app.css', '', 'all');
    wp_enqueue_style('stylesheet');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');