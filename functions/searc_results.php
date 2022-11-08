<?php
 include("../controllers/product_controller.php");

//  Collect search input from user
if(isset($_POST['search'])){
    $product_brand = $_POST['search'];
    
    $productSearch =  searchproduct_ctr($product_brand);

    header('Location: ../view/product_search_result.php?product_id='.$product_brand);
}

?>