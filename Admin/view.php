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

</body>
</html>

