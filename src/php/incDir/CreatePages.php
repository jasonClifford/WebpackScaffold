<?php
/*
@package SynapticFire

=====================
    CreatePages PAGE
=====================
*/


function CreatePage(){

    $post_title = $_POST['ProjectName'];
    $post_excerpt = $_POST['ProjectDiscript'];
    $tags = $_POST['TypeOption'];
  
    
    
    
    // Create post object
	$new_Post_gen = array(
		'post_type'		=> 'page',
		'post_title'	=> $post_title,
		'post_status'	=> 'publish',
        'post_author'	=> $user_id,
        'post_excerpt'  => $post_excerpt,
        'tags_input'  => array($tags),
    );
    
    $post_id = wp_insert_post( $new_Post_gen );
    
    wp_die();

   
}


add_action( 'wp_ajax_my_ajax_hook','CreatePage' );

////////////// Get Pages to dispay /////////////////
