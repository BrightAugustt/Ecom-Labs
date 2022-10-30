
<?php

session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../index.php');
   };
include('../controllers/product_controller.php');
if (isset($_POST['updatecategory'])){
    $cat_id = $_POST['cat_id'];
    $result=selectonecategory_ctr($cat_id);
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
                    <form action="../actions/updatecategoryprocess.php" onsubmit="validate()" method="POST">

                        <div class="formgroup">
                        <input type="hidden" name="cat_id" value=" <?php  echo $result[0]['cat_id']; ?> ">
                        </div>
                        <div class="formgroup">
                            <label for="brandname">Brand Name</label>
                            <input type="text" placeholder="<?php echo $result[0]['cat_name']; ?>" id="cat_name" name="cat_name" required>
                        </div>
                        <button id="button" value="updatecategory" name="updatecategory">Update brand</button>
                    </form>
                </div>
            </div>
        </div>
        <script defer src="./register.js"></script>

    </body>
    
    </html>
        