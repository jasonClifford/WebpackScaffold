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
	// $new_Post_gen = array(
	// 	'post_type'		=> 'page',
	// 	'post_title'	=> $post_title,
	// 	'post_status'	=> 'publish',
    //     'post_author'	=> $user_id,
    //     'post_excerpt'  => $post_excerpt,
    //     'tags_input'  => array($tags),
       
        
    // );
    // CREATS THE PAGE
    // $post_id = wp_insert_post( $new_Post_gen );

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
     //wp_set_object_terms( $post_id, array($theTermId), 'Project' );     //(POST ID, array(termID), TAXONOMY NAME) ISSUE IS GETTING THE TERM ID

    // APPLY NEW TAX TO PAGE

    //******************************************************************************************************************************************** */

    $pages = array(
        array(
            'name'  => $post_title,
            'title' => $post_title,
            'child' => array(
                    'script' => array(
                                    'Pname'      => 'Script',
                                    'Ptitle'      =>$post_title.'_Script',
                                    'Ptemplate'  => 'page_Full_Script.php'
                                    ),
                    'assets' => array(
                                    'Pname'     => 'Assets',
                                    'Ptitle'      =>$post_title.'_Assets',
                                    'Ptemplate' => 'page_Full_Assets.php'
                    ),
                    'settings' => array(
                        'Pname'     => 'Settings',
                        'Ptitle'      =>$post_title.'_Settings',
                        'Ptemplate' => 'page_Full_Settings.php'
                     )
            )
        )
      
    );

    $template = array(
        'post_type'   => 'page',
        'post_status' => 'publish',
        'post_author' => $user_id,
        'post_excerpt'  => $post_excerpt,
        'tags_input'  => array($tags),
    );

    foreach( $pages as $page ) {
        $exists = get_page_by_title( $page['title'] );
        $my_page = array(
            'post_name'         => $page['name'],
            'post_title'        => $page['title'],
            'page_template'     => 'page_Full.php'
            
        );
        $my_page = array_merge( $my_page, $template );

        $id = ( $exists ? $exists->ID : wp_insert_post( $my_page ) );

        if( isset( $page['child'] ) ) {
            foreach( $page['child'] as $key[] => $value ) {
                $child_id = get_page_by_title( $value );
                $child_page = array(
                    'post_name'         => $value['Pname'],
                    'post_title'        => $value['Ptitle'],
                    'post_parent'       => $id,
                    'page_template'     => $value['Ptemplate'],
                );
                $child_page = array_merge( $child_page, $template );
                if( !isset( $child_id ) ) wp_insert_post( $child_page );
            }
        }
    }
    wp_die();

   
}


add_action( 'wp_ajax_CreatePage','CreatePage' );

////////////// Create custom catagory /////////////////
