<?php
include("../controllers/customer_controller.php");


$customer_email = $_POST["cemail"];
    $customer_pass = $_POST["cpass"];

if(isset($_POST["login"])){
    
    
    
    if(selectOne_Email_ctr($customer_email)!=false){
        $verify = selectOne_Email_ctr($customer_email);
        $pass = $verify["customer_pass"];

        if (password_verify($customer_pass2,$customer_pass) and $check['user_role']==1){
            session_start();
            $_SESSION['customer_id'] = $result['customer_id'];
            $_SESSION['custmer_name'] = $result['customer_name'];
            $_SESSION['customer_email'] = $result['customer_email'];

            header('Location:../Admin/admin.php');
        }

        else if (password_verify($customer_pass2,$customer_pass) and $check['user_role']!=1) {
            session_start();
            $_SESSION['customer_id'] = $result['customer_id'];
            $_SESSION['custmer_name'] = $result['customer_name'];
            $_SESSION['customer_email'] = $result['customer_email'];
            header('Location:../view/home.php');
        } else{
            session_start();
            $_SESSION['error'] = 'Invalid login details!';    
            header('Location:../Login/login.php');
        }


    }
}
        





?>