<?php
include("../controllers/customer_controller.php");

// Collecting form data
// GET is used by default so define the type of method
// POST is used for secure information transmission.
if(isset($_POST["login"])){


    // Variable to capture the name value for each user input.
    $customer_email = $_POST["cemail"];
    $customer_pass = $_POST["cpass"];
    $login =loginCustomer_ctr($customer_email);
    $verify = selectOne_Email_ctr($customer_email);

        if($login != false){
            if (password_verify($customer_pass,$login['customer_pass']) and $verify['user_role']==1 ){

                      
                       $_SESSION['id']= $login['customer_pass'];
                         // redirect to login
                            header('Location:../Admin/admin.php');
            }

            else if (password_verify($customer_pass,$login['customer_pass']) and $verify['user_role']!=1){
                $_SESSION['id']= $login['customer_pass'];
                // redirect to login
                   header('Location:home.php');
            }
            


            else{
                session_start();
$_SESSION['error']='Invalid credentials';
                header('Location:login.php');
            }
                    }
                    else{
                        session_start();
$_SESSION['error']='Invalid credentials';
                        header('Location:login.php');
                    }
        


    }


?>