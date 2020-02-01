<?php
/*
@package SynapticFire

=====================
    MEDIA LIBRARY
=====================
*/

//////////////////////  GET AND DISPLAY IMAGES FROM MEDIA LIB   /////////////////////////////////////////////

function get_images_from_media_library() {/// GET IMAGES AND PUT INTO ARRAY
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' =>'image',
        'post_status' => 'inherit',
        //'posts_per_page' => 5,
        'orderby' => 'rand'
    );
    $query_images = new WP_Query( $args );
    $images = array();
    foreach ( $query_images->posts as $image) {// this whole peice is a filter
        $images[]= $image->ID; //guid gets path - ID gets the ID of image
    }
    return $images;
};

function display_images_from_media_library() { /// DISPLAY THE ARRAY IN HTML TO BE ECHOED OUT

    $imgs = get_images_from_media_library();  // imgs can be any var as long as it referances the get_images.. funcion above
	$html = '<div id="media-gallery">';
	
	foreach($imgs as $img) {
	
        $html .= '<div id="Pics">';
            $html .= '<img src="' . wp_get_attachment_url($img) . '" alt="" />';
            $html .= '<p>'.$img.'</p>';
            $html .= '<h3>'.get_the_title($img).'</h3>';
            $html .= '<div>'.get_the_tags($img).'</div>';
         
            
        $html .= '</div>'; 

        
	
	}
	
	$html .= '</div>';
	
	return $html;

};



///////////////////////////////////////  THIS IS STUPID SIMPLE   AND WORKS  /////////////////////////////////////////
    //// SET POST THUMBNAIL WITH POST ID AND IMAGE ID
// $post_id = 699;
// $attach_id= 796;

// set_post_thumbnail( $post_id, $attach_id );



////////////////////////////////////////////////////////////////////////////////////////////////////
