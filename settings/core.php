<?php
//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login
function checklogin(){
    if(!isset($_SESSION['cid'])){
        return false;
    }
    return true;
}
//function to get user ID
function checklogin_index(){
    if(!isset($_SESSION['cid'])){
        return false;
    }
    return true;
}

//function to check for role (admin, customer, etc)



?>