
<?php

session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../index.php');
   };
include('../controllers/product_controller.php');
if (isset($_POST['updateproduct'])){
    $cat_id = $_POST['cat_id'];
    $result=selectoneproduct_ctr($product_id);
}
?>
   
    <!--  -->
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trial</title>
        <link rel="stylesheet" href="stylesc.css">
        <link rel="stylesheet" href="mediaQueries.css">
    </head>
    
    <body>
        <div class="container">
            <div class="content">
                <div class="info">
                    <h1 class="name">Gradie</h1>
                    <p class="grade">Beautiful gradients in seconds.</p>
                    
                </div>
                <div class="form" >
                    <h1 class="login">Update brand</h1>
                    <form action="../actions/updateproductprocess.php" onsubmit="validate()" method="POST">

                        <div class="formgroup">
                        <input type="hidden" name="product_id" value=" <?php  echo $result[0]['product_id']; ?> ">
                        <input type="hidden" name="product_image" value=" <?php  echo $result[0]['product_image']; ?> ">
                        </div>
                        <div class="formgroup">
                            <label for="brandname">Product Title</label>
                            <input type="text" placeholder="<?php echo $result[0]['product_title']; ?>" id="product_title" name="product_title" required>
                        </div>

                        <div class="formgroup">
                            <label for="brandname">Product price</label>
                            <input type="text" placeholder="<?php echo $result[0]['product_price']; ?>" id="product_price" name="product_price" required>
                        </div>

                        <div class="formgroup">
                            <label for="brandname">Product description</label>
                            <input type="text" placeholder="<?php echo $result[0]['product_description']; ?>" id="product_description" name="product_description" required>
                        </div>

                        <div class="formgroup">
                            <label for="brandname">Product category</label>
                            <input type="text" placeholder="<?php echo $result[0]['product_cat']; ?>" id="product_cat" name="product_cat" required>
                        </div>

                        <div class="formgroup">
                            <label for="brandname">Product brand</label>
                            <input type="text" placeholder="<?php echo $result[0]['product_brand']; ?>" id="product_brand" name="product_brand" required>
                        </div>

                        <div class="formgroup">
                            <label for="brandname">Product image</label>
                            <input type="file" placeholder="<?php echo $result[0]['product_image']; ?>" id="product_image" name="product_image" required>
                        </div>

                        <div class="formgroup">
                            <label for="brandname">Product keyword</label>
                            <input type="text" placeholder="<?php echo $result[0]['product_keyword']; ?>" id="product_keyword" name="product_keyword" required>
                        </div>
                        <button id="button" value="updatecategory" name="updateproduct">Update product</button>
                    </form>
                </div>
            </div>
        </div>
        <script defer src="./register.js"></script>

    </body>
    
    </html>
        