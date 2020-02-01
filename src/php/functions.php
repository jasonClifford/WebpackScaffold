<?php

require get_template_directory(). '/incDir/Project.php';
require get_template_directory(). '/incDir/CreatePages.php';
require get_template_directory(). '/incDir/MustLogin.php';
require get_template_directory(). '/incDir/PosterUpload.php';
require get_template_directory(). '/incDir/MediaLib.php';



function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/app.css', '', 1,'all');
    wp_enqueue_style('stylesheet');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript(){
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
   // wp_register_script( 'PosterUpload', get_template_directory_uri(). '/app.js', array(), '1.1', true );
   // wp_register_script('CPnonce', get_template_directory_uri() . '/app.js', 1, true);
    
    wp_enqueue_script('custom');

    /////////////////////////// AJAX LOCALIZED
    //Create New Page Nonce
	wp_localize_script( 'custom', 'CreatePageNC', array(
        'ajax_url2'   => admin_url( 'admin-ajax.php' ),
        'ajax_nonce' =>wp_create_nonce( 'Cr3ateP@geN0nce' ), //Create nonce and send it to js file in postdata.ajax_nonce.
         ));       //https://www.creare.co.uk/blog/wp/wp-localize-script-wordpress
        // wp_enqueue_script('custom');
    //Poster - Post-Thumbnail
     $script_data_array = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
    );
    wp_localize_script( 'custom', 'aw', $script_data_array );
 
    // Enqueued script with localized data.
    //wp_enqueue_script( 'PosterUpload' );
}
add_action('wp_enqueue_scripts', 'load_javascript');










    ////////////////////////// ADD JQUERY SUPPORT
function load_jQuery(){
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'load_jQuery');

    /////////////////////////// ADD TAG SUPPORT TO PAGES
function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
   
    
}

    /////////////////////////// ENSURE ALL TAGS ARE ADDED TO QUERYS
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

    /////////////////////////// TAG HOOKS SUPPORT
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

    /////////////////////////// FEATURE IMAGE/ POST-THUMBNAILS SUPPORT
add_theme_support( 'post-thumbnails' );


////////////////////////////////  SHOW HIDE ADMIN BAR  //////////////////////////////////////////////////////

show_admin_bar( false ); //show or hide top admin bar

///////////////////////////////  SHOW HIDE ADMIN BAR  //////////////////////////////////////////////////////

//////////////////////////////  ADD TAGS TO IMAGES  ///////////////////////////////////////////////
// apply tags to attachments
// function wptp_add_tags_to_attachments() {
//     register_taxonomy_for_object_type( 'post_tag', 'attachment' );
// }
// add_action( 'init' , 'wptp_add_tags_to_attachments' );

// register new taxonomy which applies to attachments
function PROJECT_Atch_taxonomy() {
    $labels = array(
        'name'              => 'Project',
        'singular_name'     => 'Project',
        'search_items'      => 'Search Locations',
        'all_items'         => 'All Projects',
        'parent_item'       => 'Parent Project',
        'parent_item_colon' => 'Parent Project:',
        'edit_item'         => 'Edit Project',
        'update_item'       => 'Update Project',
        'add_new_item'      => 'Add New Project',
        'new_item_name'     => 'New Project Name',
        'menu_name'         => 'Project',
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => 'true',
        'rewrite' => 'true',
        'show_admin_column' => 'true',
    );
 
    register_taxonomy( 'Project', 'attachment', $args );
    //register_taxonomy( 'Project', 'page', $args );
}
add_action( 'init', 'PROJECT_Atch_taxonomy' );




//////////////////////////////  ADD TAXONOMY TO IMAGES  ///////////////////////////////////////////////