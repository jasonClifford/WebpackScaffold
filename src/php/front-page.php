

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

                        <div id="FormFill">
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
                            <button id="js-CreatePageBTN" type="submit"></button>
                        </div>


                        <div class="Pro_checkBoxes"> 
                                <H3>Select Project Options</H3>

                                <label class="switch">
                                 <input type="checkbox" id="communication" checked >
                                 <span class="slider round"></span>
                                 <p>Communication</p>
                                 <img src="<?php echo get_template_directory_uri(); ?>/Images/svg/ProjectIcon.svg" />
                                </label><br><br>

                                <label class="switch">
                                 <input type="checkbox" id="time_line" checked >
                                 <span class="slider round"></span>
                                <p>Time&nbspLine</p>
                                </label><br><br>

                                <label class="switch">
                                 <input type="checkbox" id="locations" checked >
                                 <span class="slider round"></span>
                                 <p>Locations</p>
                                </label><br><br>

                                <label class="switch">
                                 <input type="checkbox" id="budgeting" checked >
                                 <span class="slider round"></span>
                                <p>Budgeting</p>
                                </label><br><br>



                        </div>
                        <!-- <small class="field_msg"></small> -->
                       
                       
                    
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
            
            <div id="ProjectsLists">
           
            
                    <!-- ///////////////////////Get all pages ///////////////////////-->

                    <style>
                        .Game {
                            background-image: url("<?php echo get_template_directory_uri(); ?>/Images/svg/SWTCH.svg");
                            background-repeat: no-repeat;
                            background-size: auto;
                            
                        }
                        .Game .PosterImg {
                            background-image: url("<?php echo get_template_directory_uri(); ?>/Images/svg/200X110Poster.svg");
                            background-repeat: no-repeat;
                            background-size: auto;
                            
                        }
                        .Movie {
                            background-image: url("<?php echo get_template_directory_uri(); ?>/Images/svg/MoviePoster.svg");
                            background-repeat: no-repeat;
                            background-size: auto;
                            
                        }
                        .Movie .PosterImg {
                            background-image: url("<?php echo get_template_directory_uri(); ?>/Images/svg/185X125Poster.svg");
                            background-repeat: no-repeat;
                            background-size: auto;
                            
                        }
                        </style>
                    <?php 
                            $TempDirectory= get_template_directory().'/Images/svg/SWTCH.svg';
                            $pages = get_pages('parent');
                                
                                    foreach ( $pages as $page ) {
                                        $tags = get_the_tags( $page->ID );
                                        $element    = '<div ';
                                        $element    .= 'class="'. $tags[0]->name.'">';
                                        $element    .='<div class="PosterImg">';
                                        $element    .='<p>'.$page->ID.'</p>';
                                        $element    .=''.get_the_post_thumbnail($page->ID).'';
                                        $element    .='</div>';
                                        $element    .= '<a href="'. get_page_link($page->ID).'">';
                                        $element    .= $page->post_title;   
                                        $element    .= '</a>';
                                        $element    .= '<lable>Discription:&nbsp';
                                        $element    .= $page->post_excerpt;
                                        $element    .= '</lable>'; 
                                       // $element    .='<div id="PostID">';
                                       // $element    .='</div>';

                                        $element    .= '</div>';
                                        echo $element;
                                    }
                                
                    ?>


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
    
