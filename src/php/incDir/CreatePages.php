<?php
/*
@package SynapticFire

=====================
    CreatePages PAGE
=====================
*/
//show_admin_bar( false ); //show or hide top admin bar

global $wpdb;

if ($_POST){

    $username = $wpdb->escape($_POST['txtUsername']);
}  