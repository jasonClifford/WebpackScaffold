**This is a webpack/laravelmix application. Its pourpose is to do work in the _THEMEBUILDER folder and have it output to a Theme dir outside the parent folder.
**In this module it is outputing to the "Synaptic" folder but this can be changed in the webpack.mix.js file that dictates the output path. 
**You must have the Exterior folder made first (eg. in this case the Synaptic folder must first exist or you will get a path error.)
**npm run watch is the terminal command to exicute the copy and laravel watch external and local proxy watching.
**To add more js files into the main app.js output-> create file and add name in webpack.mix.js within the Array.
**jQuery CAN be loaded only through the use of the wp_enque_scripts function. looks like it cannot be added in conjunction 
with any other scripts (in same cusom function)



************************************ WORK PAD ***************************************************
HTML
<input type="file" name="my_file_upload" id="my_file_upload_id" class="bg_checkbox"  >

function register_team_show_case_setting() {
//register our settings
    register_setting('my_team_show_case_setting', 'my_file_upload');
}
add_action('admin_init', 'register_team_show_case_setting');

PHP
require_once( ABSPATH . 'wp-admin/includes/image.php' );
require_once( ABSPATH . 'wp-admin/includes/file.php' );
require_once( ABSPATH . 'wp-admin/includes/media.php' );
$attach_id = media_handle_upload('my_file_upload', $post_id);
if (is_numeric($attach_id)) {
    update_option('option_image', $attach_id);
    update_post_meta($post_id, '_my_file_upload', $attach_id);
}

IMAGE DISPLAY
echo wp_get_attachment_url(get_option('option_image'));

*************************************************************************************************