
<?php
/**
* Template Name: Visionary_Full
*
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Synaptic Fire</title>
    
</head>
<body>

<?php get_header();?>

<div id="page">




    
        <!-- SIDE BAR -->
        <div id="sideBarL">
            <div class="logo">
                <a href="<?php echo get_site_url(); ?>">
                     <img src="<?php echo get_template_directory_uri(); ?>/Images/svg/SF_Logo2.svg"/>
                     
                </a>
            </div>
        <!-- SIDE BAR -->


          <!-- SCRIPT BUTTON -->
          <div class="ScriptBtn">
          <a href="<?php echo get_permalink( $post->post_parent ); ?>/script">
                <input type="image" id="js-ProjectBtn" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ScriptICN.svg" alt="Submit">
            </a>
                <div class="ScriptBtn_tip">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ToolTip.svg" alt="Create Script">
                    <p>Script Writer</p>
                </div>
             </div>
             <!-- SCRIPT BUTTON -->

              <!-- MEDIA BUTTON -->
            <div class="mediaBtn">
            <a href="<?php echo get_permalink( $post->post_parent ); ?>/assets" >
                <input type="image" id="js-mediaBtn" src="<?php echo get_template_directory_uri(); ?>/Images/svg/AssetsICN.svg" alt="Submit">
            </a>
                <div class="mediaBtn_tip">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ToolTip.svg" alt="Explore Assets">
                    <p>Explore Assets</p>
                </div>
             </div>
             <!-- MEDIA BUTTON -->

             <!-- SETTINGS BUTTON -->
          <div class="settingsBtn">
         <a href="<?php echo get_permalink( $post->post_parent ); ?>/settings">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/Images/svg/SettingsICN.svg" alt="Submit">
        </a>
                <div class="settingsBtn_tip">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ToolTip.svg" alt="Settings">
                    <p>Settings</p>
                </div>
             </div>
             <!-- SETTINGS BUTTON -->
           
        </div>
        <!-- MAIN CENTER WINDOW -->
        <div id="pageBdy">

            <div id="topBar">

        <!-- PROJECT HOME BUTTON -->
                <div id="prodHome">
                    
                    
                </div>
         <!-- PROJECT HOME BUTTON -->
            
                <div id="centerTitle">
                    <p><?php printf( wp_title('') ); ?></p>
                </div>

                <div id="userName">
                    <p> 
                    <?php
                        $current_user = wp_get_current_user();
                        if ( ! ( $current_user instanceof WP_User ) ) {
                             return;
                         } else{
                            printf( __( 'Logged In As:  %s', 'textdomain' ), esc_html( $current_user->display_name ) );
                         }
                        ?>
                      </p>


                </div>
                
                
            </div>
            
        

        </div>

        
       <!-- MAIN CENTER WINDOW -->

       <!-- RIGHT SIDE BAR -->
        <div id="PicBar">
        
        
    
        </div>
        <!-- RIGHT SIDE BAR -->



    </div>



<?php get_footer();?>
    
