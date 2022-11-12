<?php
include("../controllers/product_controller.php");
session_start();

if(isset($_POST['inputbx'])){
    $id=$_POST['pid'];

    $increase= updatecart_qty_ctr($p_id,$c_id);
} 
elseif(isset($_POST['inputbx1'])){
    $id =$_POST['pid1'];
    $check =  updatecart_qty_ctr($p_id,$c_id);
    $add = $check['qty'];
    if($add==1){
        deletecart_ctr($p_id,$c_id);
    }else{
        updatecart_qty_ctr($p_id,$c_id);
    }
}else{
    echo"something went wrong";
}



?>