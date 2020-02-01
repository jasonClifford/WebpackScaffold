<?php
/*
@package SynapticFire

=====================
  POSTER UPLOAD MAIN
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
    $tags = $post_ID;
    $wp_filetype = wp_check_filetype($filename, null );
    
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name(basename($filename)),
        'post_content' => '',
        'post_status' => 'inherit',
        'tags_input'  => array($tags),
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

// Register custom Taxonomys:
//https://code.tutsplus.com/articles/applying-categories-tags-and-custom-taxonomies-to-media-attachments--wp-32319