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
<!-- Modal POSTER popup window start --> 
<div class="JS_Poster_Modal">
    <div class="Poster_pop">
        <div class="Poster_pop_COL1">
            <div class="Poster_pop_ROW1">
                <div class="Title"><p>Upload Images to Poster</p></div>
                <form id="js_PosterUpload" method="POST" enctype="multipart/form-data" action="">

                        <label>Choose File to Upload:</label>
                        <input type="file" id="file" accept="image/*" />
                        <input type="text" id="ID" name="ID" ></input>
                        <button type="submit" id="PosterSBMT">submit</button>
                </form>
            <p id="fp"></p>
            </div>
          



        </div> <!-- END OF SECTION 1 -->
        <div class="section2">
            <div class="PosterCLS">
                <p>Cancel</p>
            </div>
        </div>
        
</div>


</div>
<!-- Modal POSTER popup window end -->     

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
            <!-- <script type='text/javascript'>
                var thing = "dim tings";
            </script> -->
            <div class="Modal-two">
                <div class="CP-form">
                <!-- CREATE PROJECT FORM  -->
                    <form id="js_CreatePage" method="POST" enctype="multipart/form-data" action="">

                    
                        <label for="ProjectName">Enter Project Name:</label>
                        <input type="text" id="ProjectName" name="Project_name" placeholder="Project Name" spellcheck="true"></input>
                        <div id="urlAppend"><p>URL</p></div>
                        <label for="ProjectDiscription">Project Description:</label>
                        <input type="text" id="ProjectDiscription" name="ProjectDiscription" placeholder="Project Discription" spellcheck="true"></input>
                        <div id="CustomPageType">
                            <label for="js-PageType">Select Project Type:</label>
                                <select name="js-PageType" id="js-PageType">
                                    <option value="Movie">Movie</option>
                                    <option value="Game">Game</option>
                                </select>

                        </div>

                        

                        
                        <!-- <small class="field_msg"></small> -->
                        <button id="js-CreatePageBTN" type="submit"></button>
                       
                    
                    </form>
                    <!-- CREATE PROJECT FORM END -->
                
                   

                </div>

            </div>


            <div class="Modal-three">
            <button id="sub-js-CreatePageBTN"><p>Create</p></button>
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
                <a href="<?php echo get_site_url(); ?>">
                     <img src="<?php echo get_template_directory_uri(); ?>/Images/svg/SF_Logo2.svg"/>
                     
                </a>
            </div>
        <!-- SIDE BAR -->


            <!-- SCRIPT BUTTON -->
            <div class="projectBtn">
                <input type="image" id="js-ProjectBtn" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ProjectIcon.svg" alt="Submit">
                <div class="projectBtn_tip">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ToolTip.svg" alt="Create Project">
                    <p>Creat New Project</p>
                </div>
             </div>
             <!-- PROJECT BUTTON -->

              <!-- MEDIA BUTTON -->
            <div class="mediaBtn">
                <input type="image" id="js-mediaBtn" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ProjectIcon.svg" alt="Submit">
                <div class="mediaBtn_tip">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/Images/svg/ToolTip.svg" alt="Create Project">
                    <p>Creat New Project</p>
                </div>
             </div>
             <!-- PROJECT BUTTON -->

            <!-- SETTINGS BUTTON -->
            <div class="settingsBtn">
            <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/Images/svg/SettingsICN.svg   "/>
                </a>
             </div>
            <!-- SETTINGS BUTTON -->
           
        </div>
        <!-- MAIN CENTER WINDOW -->
        <div id="pageBdy">

            <div id="topBar">
            
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
    
