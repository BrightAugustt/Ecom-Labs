<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class product_class extends db_connection
{
	//--INSERT into brand--//
	
	public function add_brand($brand_name){

		// Write query
		$sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$brand_name')";
		// Return  
		return $this -> db_query($sql);
	}


    //--INSERT into category--//
	
	public function add_category($cat_name){

		// Write query
		$sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$cat_name')";
		// Return  
		return $this -> db_query($sql);
	}

    //--INSERT into products--//
	
	public function add_product($product_cat, $product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){

		// Write query
		$sql = "INSERT INTO `products`( `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
		// Return  
		return $this -> db_query($sql);
	}
	//--Update brand--//
	
	public function update_brand($brand_id,$brand_name){

		// Write query
		$sql = "UPDATE `brands` SET `brand_name`='$brand_name' WHERE `brand_id` = '$brand_id'";
		// Return  
		return $this->db_query($sql);
	}

    //--INSERT into category--//
	
	public function update_category($cat_id,$cat_name){

		// Write query
		$sql = "UPDATE `categories` SET `cat_name`='$cat_name' WHERE `cat_id` = '$cat_id' ";
		// Return  
		return $this -> db_query($sql);
	}

    //--Update all  products--//
	
	public function update_product($product_id,$product_cat, $product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){

		// Write query
		$sql = "UPDATE `products` SET `product_cat`='$product_cat',`product_brand`='$product_brand',`product_title`='$product_title',`product_price`='$product_price',`product_desc`='$product_desc',`product_image`='$product_image',`product_keywords`='$product_keywords' WHERE product_id = $product_id ";
		// Return  
		return $this -> db_query($sql);
	}

	//--Select all brand--//
	
	public function selectall_brand(){

		// Write query
		$sql =  "SELECT * FROM `brands`";
		// Return  
		return $this -> db_fetch_all($sql);
	}

	public function selectall_category(){

		// Write query
		$sql =  "SELECT * FROM `categories`";
		// Return  
		return $this -> db_fetch_all($sql);
	}

	public function selectone_brand($brand_id){

		// Write query
		$sql =  "SELECT * FROM `brands` WHERE `brand_id` = '$brand_id'";
		// Return  
		return $this->db_fetch_all($sql);
	}

	public function selectone_category($cat_id){

		// Write query
		$sql =  "SELECT * FROM `categories` WHERE `cat_id` = '$cat_id'";
		// Return  
		return $this->db_fetch_all($sql);
	}

}
?>