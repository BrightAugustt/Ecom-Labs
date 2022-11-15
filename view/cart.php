<?php

include("../controllers/product_controller.php");
session_start();
$cid = $_SESSION['customer_id'];
$count = count_cart_ctr($cid);
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
  <?php
    $cart=  get_from_cart_ctr($_SESSION['customer_id']);
    foreach($cart as $item){
    ?>

    <tr>
      <!-- <th scope="row">1</th> -->
      <td><img src="../Background.png" alt="" style="width: 50px;"> <?php echo($item['product_title']) ?></td>
      <td><?php echo('GHC'); echo($item['products.product_price*cart.qty']);?></td>
      <td>

        <div class="input-group mb-3" style="width: 100px;">
          <div class="input-group-prepend">
            <button class="input-group-text" id="pid" onclick="loadDoc1(<?php echo $item['product_id'];?>)">-</button>
          </div>
          <input type="text" class="form-control text-center bg-white"  value="<?php echo $item['qty'];?>" disabled>
          <div class="input-group-appnd">
            <button class="input-group-text" id="pin" onclick="loadDoc(<?php echo $item['product_id'];?>)" >+</button>
          </div>
      </div>
      </td>
      <td><?php echo('GHC'); echo($item['products.product_price*cart.qty']); ?></td>
      <td>
      <form action="../functions/remove_from_cart.php" method="POST">
        <input type="hidden" name="p_id" value="<?php echo($item['product_id']);?>" >
        <!-- <button name="deleteCart" ></button> -->
        <input type="submit" name="deleteCart" value="Delete">
      </form>
      </td>
      <?php
    }
      ?>
    </tr>
  </tbody>
</table>

<div class="card border-dark mb-3" style="max-width: 18rem; margin: 0px 100px auto;">
  <div class="card-header">Cart Summary</div>
  <div class="card-body text-dark">
  <?php
    $get = get_from_cart_ctr($cid);
    $total = total_cart_price_ctr($cid);
    foreach ($get as $item){
    
    ?>
    <h5 class="card-title">Subtotal</h5>
    <p class="card-text">
    <?php
    echo $item['products.product_price*cart.qty'];
    ?>
     <?php } ?>
     <h5>Total</h5>
     GHC <?php echo $total["SUM(cart.qty*products.product_price)"] ?>
    </p>
    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">
      <a href="Payment.php" class="pay2" type="submit">Proceed To Checkout</a>
    </button>
  </div>
</div>
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