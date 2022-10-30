
<?php

session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../index.php');
   };
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
                    <!-- <img src="img.png" alt="img"> -->
                </div>
                <div class="form" >
                    <h1 class="login">Add new category</h1>
                    <form action="../actions/addcatprocess.php" onsubmit="validate()" method="POST">

                        <div class="formgroup">
                            <label for="brand name">Category Name</label>
                            <input type="text" placeholder="Cars" id="cat_name" name="cat_name" required>
                        </div>
                       
                        <button id="button" value="addcategory" name="addcategory">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
        <script defer src="./register.js"></script>

    </body>
    
    </html>
        