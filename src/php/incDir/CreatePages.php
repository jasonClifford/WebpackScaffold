<?php
/*
@package SynapticFire

=====================
    CreatePages PAGE
=====================
*/


function CreatePage(){

    $results = '';
    $post_title = $_POST['ProjectName'];
    echo '<pre>';
    print_r( $post_title );
    
    
    // Create post object
	$new_Post_gen = array(
		'post_type'		=> 'page',
		'post_title'	=> $post_title,
		'post_status'	=> 'publish',
		'post_author'	=> 1,
    );
    
    wp_insert_post( $new_Post_gen );
    die($results);

   
}
add_action( 'wp_ajax_my_ajax_hook','CreatePage' );