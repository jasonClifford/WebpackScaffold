<?php
/*
@package SynapticFire

=====================
    CreatePages PAGE
=====================
*/


function file_upload_callback() {
    $post_ID = $_POST['ID'];
   // $arr_img_ext = array('image/png', 'image/jpeg', 'image/jpg', 'image/gif');
   // if (in_array($_FILES['file']['type'], $arr_img_ext)) {
    $upload = wp_upload_bits($_FILES["file"]["name"], null, file_get_contents($_FILES["file"]["tmp_name"]));
    
   // }
   $post_id = $post_ID; //**************set post id to which you need to set post thumbnail
    $filename = $upload['file'];
    $wp_filetype = wp_check_filetype($filename, null );
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment( $attachment, $filename, $post_id );
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
    wp_update_attachment_metadata( $attach_id, $attach_data );
    set_post_thumbnail( $post_id, $attach_id );
    wp_die();
}

add_action( 'wp_ajax_file_upload', 'file_upload_callback' );

///////////////////////////////////////////////////////////////////////////////////////////

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
            
        $html .= '</div>'; 

        
	
	}
	
	$html .= '</div>';
	
	return $html;

};

////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////


//  HELPFULL SITES


//  https://www.wpexplorer.com/wordpress-featured-image-url/
//  https://gabrieleromanato.name/wordpress-get-and-display-images-from-the-media-library





//  https://artisansweb.net/set-featured-image-programmatically-wordpress/  Just PHP
//  https://therichpost.com/upload-file-wordpress-media-library-jquery-ajax-frontend-form/
//  https://stackoverflow.com/questions/36767222/wordpress-and-ajax-upload-image-as-featured
//  https://gist.github.com/azizultex/da7dd859fcd37dfca8a3b5b20add877a
//  Goo search:
//  https://www.google.com/search?q=wordpress+ajax+image+upload&rlz=1C1CHBD_enCA860CA860&oq=wordpress+ajax+image+upload&aqs=chrome..69i57j0l4.11273j0j7&sourceid=chrome&ie=UTF-8
// https://stackoverflow.com/questions/36767222/wordpress-and-ajax-upload-image-as-featured/36785673     Feature Image