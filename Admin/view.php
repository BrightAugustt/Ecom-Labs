<?php

session_start();

if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../index.php');
   };
include("../controllers/product_controller.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Display</title>
</head>
<body>
<button href="brand.php">Back to Add Page</button>
<div class="brand"> 
    <table class="table">

        <thead>
            <tr>
                <th scope="col">Brand Name</th>


            </tr>
        </thead>
        <tbody>
            <?php
                function displayAllCtr(){

                    $result = selectall_brand_ctr();
                    for ($i =0; $i < count($result); $i++){
                        echo "<tr>";
                        echo "<td>". $result[$i]['brand_name']. "<td>";
                        echo "<th><form action = 'update_brand.php' method= 'POST'>
                        <input type='submit' value='Update'  name='updatebrand'>
                        <input type='hidden' name='brand_id' value='" . $result[$i]['brand_id'] . "'></form></th>";

                        echo "<th><form action='delete_brand.php' method='POST'>
                        <input type='submit' value='delete'  name='delete'>
                        <input type='hidden' name='brand_id' value='" . $result[$i]['brand_id'] . "'></form></th>";
                        echo "</tr>";
                    }
                }	   
                displayAllCtr();
                ?>
        </tbody>
    </table>
</div>

<div class="category"> 
    <table class="table">

        <thead>
            <tr>
                <th scope="col">Category Name</th>
                

            </tr>
        </thead>
        <tbody>
            <?php
                function displayCtr(){

                    $display = selectall_category_ctr();
                    for ($i =0; $i < count($display); $i++){
                        echo "<tr>";
                        echo "<td>". $display[$i]['cat_name']. "<td>";
                        echo "<th><form action = 'update_category.php' method= 'POST'>
                        <input type='submit' value='Update'  name='updatecategory'>
                        <input type='hidden' name='cat_id' value='" . $display[$i]['cat_id'] . "'></form></th>";

                        echo "<th><form action='delete_brand.php' method='POST'>
                        <input type='submit' value='delete'  name='delete'>
                        <input type='hidden' name='cat_id' value='" . $display[$i]['cat_id'] . "'></form></th>";
                        echo "</tr>";
                    }
                }	   
                displayCtr();
                ?>
        </tbody>
    </table>
</div>

<div class="category"> 
    <table class="table">

        <thead>
            <tr>
                <th scope="col">Product Name</th>
                

            </tr>
        </thead>
        <tbody>
            <?php
                function displayproductCtr(){

                    $product = selectall_product_ctr();
                    for ($i =0; $i < count($product); $i++){
                        echo "<tr>";
                        echo "<td>". $product[$i]['product_title']. "<td>";
                        echo "<td>". $product[$i]['product_price']. "<td>";
                        echo "<td>". $product[$i]['product_desc']. "<td>";
                        echo "<td><img src='" . $product[$i]['product_image'] . "' height='50px'></td>";
                        
                        echo "<td>" . $product[$i]['product_keywords'] . "</td>";
                        echo "<th><form action = 'update_product.php' method= 'POST'>
                        <input type='submit' value='Update'  name='updateproduct'>
                        <input type='hidden' name='product_id' value='" . $product[$i]['product_id'] . "'></form></th>";

                        echo "<th><form action='delete_brand.php' method='POST'>
                        <input type='submit' value='delete'  name='delete'>
                        <input type='hidden' name='cat_id' value='" . $product[$i]['cat_id'] . "'></form></th>";
                        echo "</tr>";
                    }
                }	   
                displayproductCtr();
                ?>
        </tbody>
    </table>
</div>

</body>
</html>

