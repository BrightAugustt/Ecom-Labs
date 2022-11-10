<?php
 include("../controllers/product_controller.php");

//  Collect search input from user
if(isset($_POST['addToCart'])){

    if(isset($_SESSION['cart'])){

    }else{
        $session_array = array(
            'product_id' => $_GET['product_id'],
            "product_title" => $_GET['product_title'],
            "product_price" => $_GET['product_price'],
            "product_desc" => $_GET['product_desc'],
            "product_id" => $_GET['product_id'],

        );
        $_SESSION['cart'][] = $session_array;
    }
    
    $cart = addcart_ctr($ip_add,$c_id,$qty);
    var_dump($_SESSION['cart']);

    // header('Location: ../view/cart.php?product_id='.$product_id);
}

?>