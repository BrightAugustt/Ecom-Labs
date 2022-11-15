<?php require ("../controllers/product_controller.php");
 //require ("../controllers/cart_controller.php");
 require ('../settings/core.php');

$cid =$_SESSION['customer_id'];
$count=count_cart_ctr($c_id);
// $total=total_cart_price_ctr($cid);


?>
