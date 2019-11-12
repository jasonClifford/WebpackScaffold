
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

<!-- Modal popup window start -->
    <div id="Project_modal" class="JS_Project_modal">

        <!-- inner Modal Window -->
        <div class="Project_pop">

            

            <div class="Modal-one">
            <div class="Project_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/Images/svg/SF_Logo2.svg"/>
                <span></span>
            </div>


            </div>
            <div class="Modal-two"></div>


            <div class="Modal-three">
                <div id="Close_Btn">
                    <p>Cancel</p>
                </div>


            </div>



            
        
        </div>
        <!-- End inner Modal Window -->
    </div>
<!-- Modal popup window end -->

    
        <!-- SIDE BAR -->
        <div id="sideBarL">
            <div class="logo">
                <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/Images/svg/SF_Logo2.svg"/>
                     
                </a>
            </div>
        <!-- SIDE BAR -->


            <!-- PROJECT BUTTON -->
            <div class="projectBtn">
                <input type="image" id="js-ProjectBtn" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ProjectIcon.svg" alt="Submit">
                <div class="projectBtn_tip">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ToolTip.svg" alt="Create Project">
                    <p>Creat New Project</p>
                </div>
             </div>
             <!-- PROJECT BUTTON -->

            <!-- SETTINGS BUTTON -->
            <!-- <div class="settingsBtn">
            <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/Images/svg/SettingsICN.svg   "/>
                </a>
             </div> -->
            <!-- SETTINGS BUTTON -->
           
        </div>
        <!-- MAIN CENTER WINDOW -->
        <div id="pageBdy">

            <div id="topBar">
            
                <div id="centerTitle">
                    <p><?php printf( get_bloginfo ( 'name' ) ); ?></p>
                </div>

                <div id="userName">
                     <!-- <p><?php printf( get_bloginfo ( 'name' ) ); ?></p> -->

                    <p> 
                    <?php
                        // $current_user = wp_get_current_user();
                        
                        
                        $current_user = wp_get_current_user();
                        if ( ! ( $current_user instanceof WP_User ) ) {
                             return;
                         } else{
                            printf( __( 'Inspire Us: %s', 'textdomain' ), esc_html( $current_user->display_name ) );
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


  


        <!-- <nav class="topbar"></nav>

        <nav class="sidebarL"></nav>

        <nav class="sideBarR"></nav>    -->



<!-- <button class="btn-default">
<a href="http://localhost:8000/SynapticFire/wp-admin/customize.php?url=http%3A%2F%2Flocalhost%2FSynapticFire%2F"><h1>this is a button</h1></a>
</button> -->

<?php get_footer();?>
    
