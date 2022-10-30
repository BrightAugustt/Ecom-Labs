<?php

session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../index.php');
   };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstyles.css">
    <title>Admin Panel</title>
</head>
<body>
   <div class="admin">
   <h2>WELCOME ADMIN</h2>
   <h3>Make Changes you desire</h3>
    </div>
    <div class="card">
    <img src="brands.jpg" alt="Avatar" style="width:60%">
    <div class="container">
        <p>Add new brands to your company</p>
        <button name="addbrand" id="addbrand" class="button"><a href="add_brand.php"> Product Brand</a></button>
        <br>
        <br>
        <button name="addcategory" id="addcategory" class="button"><a href="view.php">View Brand</a></button>
    </div>
    </div>

    <div class="card">
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
        <button name="addproduct" id="addproduct" class="button"><a href="add_category.php">Add New Product</a></button>
    </div>
    </div>
</body>
</html>