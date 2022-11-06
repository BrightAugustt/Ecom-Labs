
<?php

session_start();
// if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['user_role']!= 1) )
//    {
//       header('Location:../index.php');
//    };
   require("../controllers/product_controller.php");
?>
   
    <!--  -->
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Product Page</title>
        <link rel="stylesheet" href="stylesc.css">
        <link rel="stylesheet" href="mediaQueries.css">
    </head>
    
    <body>
        <div class="container">
            <div class="content">
                <div class="info">
                    <h1 class="name">Gradie</h1>
                    <p class="grade">Beautiful gradients in seconds.</p>
                    <!-- <img src="img.png" alt="img"> -->
                </div>
                <div class="form" >
                    <h1 class="login">Add new products</h1>
                    <form action="../actions/addproductprocess.php" onsubmit="validate()" method="POST">

                    <div class="formgroup">
                            <label for="">Select Category</label>
                            <select name='product_cat'>

                            <?php
                            $cat = selectall_category_ctr();
                            $brand = selectall_brand_ctr();

                                foreach($cat as $item){
                            ?>
                            <option value=<?php  echo($item['cat_id'])?>><?php  echo($item['cat_name'])?></option>
                            <?php }?>
                            </select>
                            <br>

                            <label for="product name">Select Brand</label>
                            <select name="product_brand">
                                <?php
                                foreach($brand as $item){
                                ?>
                                <option value=<?php  echo($item['brand_id'])?>><?php  echo($item['brand_name'])?></option>
                                <?php }?>
                        </div>


                        <div class="formgroup">
                            <label for="product name">Product Title</label>
                            <input type="text" placeholder="Cars" id="product_title" name="product_title" required>
                        </div>

                        <div class="formgroup">
                            <label for="brand name">Product price</label>
                            <input type="text" placeholder="Cars" id="product_price" name="product_price" required>
                        </div>

                        <div class="formgroup">
                            <label for="brand name">Product Description</label>
                            <input type="text" placeholder="Cars" id="product_description" name="product_description" required>
                        </div>

                        <div class="formgroup">
                            <label for="brand name">Product Image</label>
                            <input type="text" placeholder="Cars" id="product_image" name="product_image" required>
                        </div>

                        <div class="formgroup">
                            <label for="brand name">Product Keyword</label>
                            <input type="text" placeholder="Cars" id="product_keywords" name="product_keywords" required>
                        </div>
                       
                        <button id="button" value="addproduct" name="addproduct">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
        <script defer src="./register.js"></script>

    </body>
    
    </html>
        