<?php
session_start();
include("../controllers/product_controller.php");

if(isset($_POST['deleteCart'])){
    $p_id = $_POST['p_id'];
    $delete = deletecart_ctr($p_id,$_SESSION['customer_id']);
    if($delete == true){
        header('Location:../view/cart.php');
    }else{
        echo"Couldn't delete from cart";
    }
    
}

?>