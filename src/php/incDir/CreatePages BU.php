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
    // CREATS THE PAGE
    $post_id = wp_insert_post( $new_Post_gen );

    //ADD NEW TERM TO TAXONOMY
    // $NewTermID = wp_insert_term( $post_id, 'Project',
    //     array(
    //         'description'   =>  $post_title,
    //         'slug'          =>   $post_title,

    //     ));

    // GET NEW TERM ID
    // $theTermId = get_term_by( 'name', $post_id, 'Project' );
    // $theTermId = $theTermId->term_id;
     // SET TERM TO POST
    // wp_set_object_terms( $post_id, array($theTermId), 'Project' );    //(POST ID, array(termID), TAXONOMY NAME) ISSUE IS GETTING THE TERM ID

    // APPLY NEW TAX TO PAGE
    wp_die();

   
}


add_action( 'wp_ajax_CreatePage','CreatePage' );

////////////// Create custom catagory /////////////////
