<?php

session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and $_SESSION['user_role']!= 1)   {
    //   header('Location:../index.php');
   };
include("../controllers/product_controller.php");
include("../settings/core.php");
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
 
<!-- Bootstrap -->

        <?php 
           $product =  selectall_product_ctr();  
            foreach($product as $item){ 
        ?>
        <nav class="navbar navbar-light bg-light">
        <form class="form-inline" action="../functions/searc_results.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
        </form>
        </nav>
        </div>
        <form action="../actions/add_to_cart.php" method="POST">
            <div class="card" style="width: 18rem;">
            
                <a href="single_product.php?product_id=<?php echo($item['product_id'])?>">
                <img class="card-img-top" src="../Background.png" alt="Card image cap">
                </a>
                <div class="card-body product_data">
                <h5 class="card-title"><?php echo($item['product_title'])?></h5>
                <h5 class="card-text">GHC<?php echo($item['product_price'])?></h5>
                <p class="card-text"><?php echo ($item['product_desc'])?></p>
                <input type="hidden" id="pid" value="<?php echo $item["product_id"]?>">
                <a href="#" class="btn btn-primary addToCartBtn" onclick="loadDoc(<?php echo $item['product_id']?>)">Add to cart</a>
                <input type="hidden" name="qty" value=1>

                <?php
                }
                ?>
                </div>
    
            </div>
        </form>
            <script>
                function loadDoc(id){
                    inputbx=document.getElementByID("pin").value;
                    console.log(id);
                    dataString = 'pid=' +id +'&inputbx' + inputbx;
                    
                

                $.ajax({
                    type: "POST",
                    url:"../actions/add_to_cart.php",
                    data: dataString,
                    cache:false,
                    success:function(result){
                        alert(result);
                    }
                    
                });
                
            }
            </script>
        
        
        ?>

</body>
</html>