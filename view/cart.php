<?php

include("../controllers/product_controller.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cart.php</title>
</head>
<body>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Products</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    $cart=  get_from_cart_ctr($_SESSION['customer_id']);
    foreach($cart as $item){
    ?>
      <!-- <th scope="row">1</th> -->
      <td><img src="<?php echo ($item['product_image']); ?>" alt="" style="width: 50px;"> <?php echo($item['product_title']) ?></td>
      <td><?php echo('$'); echo($item['products.product_price*cart.qty']);?></td>
      <td>
        <button id="pid" onclick="loadDoc1(<?php echo $item['product_id'];?>)"></button>

        <button><span><?php echo $item['qty'];?></span></button>

        <button id="pin" onclick="loadDoc(<?php echo $item['product_id'];?>)"></button>
      </td>
      <td>GHC 1300</td>
      <td>
      <form action="../functions/remove_from_cart.php">
        <input type="hidden" name="p_id" value="<?php echo($item['product_id']);?>" >
        <button name="deleteCart" ></button>
      </form>
      </td>
      <?php
    }
      ?>
    </tr>
  </tbody>
</table>
</body>
<script>
                function loadDoc(id){
                    inputbx= document.getElementByID("pin").value;
                    console.log(id);
                    dataString = 'pid='+ id +'&inputbx='+inputbx;
                  
                

                $.ajax({
                    type: "POST",
                    url:"../actions/update_qty.php",
                    data: dataString,
                    cache:false,
                    success:function(result){
                        alert(result);
                    }
                    
                });
                
            }

            function loadDoc1(id1){
                inputbx1 = document.getElementByID("pid").value;
                dataString= 'pid1='+id1+'&inputbx1='+inputbx1;
                console.log(id1);
            }

            $.ajax({
                    type: "POST",
                    url:"../actions/update_qty.php",
                    data: dataString,
                    cache:false,
                    success:function(result){
                        alert(result);
                    }
                    
                });
            </script>
</html>