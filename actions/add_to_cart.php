<?php
session_start();
 include("../controllers/product_controller.php");

//  Collect search input from user
if(isset($_POST['addToCart'])){

   $p_id = $_POST['p_id'];
   $cid = $_SESSION['customer_id'];
   $qty = $_POST['qty'];
    
   addcart_ctr($p_id,$_SERVER['REMOTE_ADDR'],$c_id,$qty);

   header('Location: ../view/cart.php');
}

?>