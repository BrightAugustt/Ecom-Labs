<?php

session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and $_SESSION['user_role']!= 1)   {
    //   header('Location:../index.php');
   };
   include("../controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="all_product.css">
    <title>Admin Panel</title>
</head>
<style>

.h3{
    text-align: center;
}
</style>
<body>
    <?php 
    $product_id = $_GET['product_id'];
    $product =  selectoneproduct_ctr($product_id); 
    // echo $product_id;
    // print_r($product);
    // print_r($product['product_title']);
    
    ?>
    <h3>Product View</h3>
    <div class="card mb-3">
        <img class="card-img-top" src="../Background.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php print_r($product['product_title'])?></h5>
            <p class="card-text"><?php print_r($product['product_desc'])?></p>
            <p class="card-text"><small class="text-muted"><?php print_r($product['product_price'])?></small></p>
        </div>
        <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
   
   <!-- <div>
   <img src="../Background.png" class="img-fluid" alt="Responsive image">
   </div> -->


</body>
</html>