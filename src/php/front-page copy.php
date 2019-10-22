
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

                <!-- the hidden checkbox to make the sidebar open and close -->
                <input type="checkbox" id="toggle1">
                <input type="checkbox" id="picBarSlide">
                

    <div id="page">

    

        <div id="sideBarL">
            <div class="logo">
                <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/Images/SF_Logo.png"/>
                </a>
            </div>
                <!-- the hamburger menu buton -->
             <label for="toggle1">
             <img src="<?php echo get_template_directory_uri(); ?>/Images/OpenClose.png"/>
             </label>

            <!-- <h3>Lorem </h3> -->
        </div>

        <div id="pageBdy">
            <div id="topBar">
                <!-- <h3>Lorem</h3> -->
            </div>
            </div>
       

        <div id="PicBar">
         <!-- the hamburger menu buton -->
         <label for="picBarSlide">
         <img src="<?php echo get_template_directory_uri(); ?>/Images/OpenClose.png"/>
             </label>

        
        <!-- <h3>Lorem</h3> -->
    
        </div>



    </div>


  


        <!-- <nav class="topbar"></nav>

        <nav class="sidebarL"></nav>

        <nav class="sideBarR"></nav>    -->



<!-- <button class="btn-default">
<a href="http://localhost:8000/SynapticFire/wp-admin/customize.php?url=http%3A%2F%2Flocalhost%2FSynapticFire%2F"><h1>this is a button</h1></a>
</button> -->

<?php get_footer();?>
    
