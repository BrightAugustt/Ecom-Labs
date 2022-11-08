<?php

session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and $_SESSION['user_role']!= 1)   {
    //   header('Location:../index.php');
   };
   include("../controllers/product_controller.php")
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
   <!-- <div class="admin">
   <h2>WELCOME ADMIN</h2>
   <h3>Make Changes you desire</h3>
    </div> -->
    <!-- <div class="card">
    <img src="brands.jpg" alt="Avatar" style="width:60%">
    <div class="container">
        <p>Add new brands to your company</p>
        <button name="addbrand" id="addbrand" class="button"><a href="add_brand.php"> Product Brand</a></button>
        <br>
        <br>
        <button name="addcategory" id="addcategory" class="button"><a href="view.php">View Brand</a></button>
    </div>
    </div> -->

    <!-- <div class="card">
    <img src="brands.jpg" alt="Avatar" style="width:60%">
    <div class="container">
        <p>Product category of your brand</p>
        <button name="addcategory" id="addcategory" class="button"><a href="add_category.php">Add Category</a></button>
        <br>
        <br>
        <button name="addcategory" id="addcategory" class="button"><a href="view.php">View Category</a></button>
    </div>
    </div>

    <div class="card">
    <img src="brands.jpg" alt="Avatar" style="width:60%">
    <div class="container">
        <p>Add new product</p>
        <button name="addproduct" id="addproduct" class="button"><a href="add_product.php">Add New Product</a></button>
    </div>
    </div> -->
 
<!-- Bootstrap -->
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <?php 
            function displayproductCtr(){
                $product = selectall_product_ctr();
                for ($i = 0; $i < count($product); $i++)     
        ?>
        <h5 class="card-title"><?php $product[$i]['product_title'];?></h5>
        <h5 class="card-title"><?php $product[$i]['product_price'];?></h5>
        <p class="card-text"><?php $product[$i]['product_desc'];?></p>
        <a href="#" class="btn btn-primary">Add to cart</a>

        <?php
            }
        displayproductCtr();
        ?>
    </div>

</div>
</body>
</html>