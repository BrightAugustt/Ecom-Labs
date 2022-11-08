<?php

session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and $_SESSION['user_role']!= 1)   {
    //   header('Location:../index.php');
   };
//    include("../controllers/product_controller.php")
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
<body>
    <?php
    $product_id = $_GET['product_id'];
    // $product =  selectoneproduct_ctr($product_id); 
    echo $product_id;
    // foreach($product as $item){
    //     echo($item['product_title']);
    // }

    ?>
   <div>
   <!-- <img src="../Background.png" class="img-fluid" alt="Responsive image"> -->
   </div>


</body>
</html>