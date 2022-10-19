<?php

//Database credentials
Define('SERVER', 'localhost');
Define('USERNAME', 'root');
Define('PASSWD', '');
Define('DATABASE', 'shoppn');


$conn = mysqli_connect(SERVER, USERNAME, PASSWD, DATABASE);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
