<?php

session_start();
include("../controllers/product_controller.php");

if(isset($_POST['addToCart'])){
    $p_id = $_POST['p_id'];
    $state = $_POST['state'];
    $ip_add = $_SERVER["REMOTE_ADDR"];
    if($state == 'addToCart'){
        decreasecart_ctr($p_id,$_SESSION['c_id'],$ip_add);
    }else{
        increasecart_ctr($p_id,$_SESSION['c_id'],$ip_add);
    }
    header('Location: ../view/cart.php');
}



?>