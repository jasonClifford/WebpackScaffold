<?php
/*
@package SynapticFire

=====================
    UserRoles PAGE
=====================
*/

function Create_User_Roles(){ 
    // This creates a role of "producer" with printed name of Producer. This example gives the role the level
    // of administrator. The IF statement is a means to track the producer versions.

    
        // if ( get_option( 'producer_version' ) < 1 ) {
        //     add_role( 'producer', 'Producer', get_role( 'administrator' )->capabilities );
        //     update_option( 'producer_version', 1 );
        // }
        //remove_role( 'custom_role' );  // gets rid of the role if it exixts-> the role is the first param. The second param is the Printed name of the role
}
add_action( 'init', 'Create_User_Roles' );


/// LEARNING 

//https://developer.wordpress.org/reference/functions/add_role/
//https://3.7designs.co/blog/2014/08/restricting-access-to-custom-post-types-using-roles-in-wordpress/

