
<?php
include("../controllers/product_controller.php");

// Collecting form data
// GET is used by default so define the type of method
// POST is used for secure information transmission.
if(isset($_POST["addproduct"])){

    // Variable to capture the name value for each user input.
    $product_cat = $_POST["product_cat"];
    $product_brand = $_POST["product_brand"];
    $product_title = $_POST["product_title"];
    $product_price = $_POST["product_price"];
    $product_desc = $_POST["product_desc"];
    $product_keywords = $_POST["product_keywords"];
    $image = $_FILES['product_image']["name"];
    $tmp = $_FILES['product_image']["tmp_name"];

    // Storing image
    $imgExt = explode('.',$image);
    $imgActualExt = strtolower(end($imgExt));
    $allowed = array('jpg','jpeg','png');
    $imgError = $_FILES['product_image']['error'];
    $imgSize = $_FILES['product_image']['size'];

    if(in_array($imgActualExt,$allowed))
    {
        if($imgError === 0){
            if($imgSize < 1000000 ){
                $fileNameNew = uniqid('',true).".".$imgActualExt;
                $fileDestination = '../images/upload'.$fileNameNew;
                move_uploaded_file($tmp,$fileDestination);
                header('Location:../Admin/view.php?uploadsuccess');
            }
        }
    }else{
        echo "Upload failed, check image format!";
    }

    // function upload($directory,$subdir,$tempname,$image){

    //     $folder = "../$directory/$subdir/".$image;

    //     if(!file_exists("../$directory/$subdir/")){
    //         // Create a new directory if file does not exist
    //         @mkdir("../$directory/$subdir/",0777);
    //         echo("New folder created");
    //         move_uploaded_file($tempname,$folder);
    //         return $folder;
    //     }else{
    //         move_uploaded_file($tempname,$folder);
    //         return $folder;
    //     }
    //     return false;
    //     }


    
    // $product_image = upload("Images","product",$tmp,$image);
    // Call a controller
    addProducts_ctr($product_cat, $product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);

    // redirect to login
    header('Location:../Admin/view.php');

}else{
    echo "Something went wrong";
}


?>