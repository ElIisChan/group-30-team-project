<?php 
session_start();

$db = new mysqli("localhost", "u-210109870", "mVrSNyGnFNSJTDU", "u_210109870_db");   

$email = stripcslashes($_GET['email']);  
$password = stripcslashes($_GET['password']);  

    $email = mysqli_real_escape_string($db, $email);  
    $password = mysqli_real_escape_string($db, $password);  
    
    $sql = "SELECT name,email,password from `user`  where email = '$email' and password = '$password' ";  
    $result = mysqli_query($db, $sql);  
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
   
   
      
    if($count == 1){  
        $row = mysqli_fetch_assoc($result);
       
        $_SESSION["username"] = $row["name"];
        $_SESSION["email"] =  $row["email"];
        $_SESSION["password"] =  $row["password"];
        
        $_SESSOPM["uservalid"] = "yes";

       
        include 'user-dashboard.php';
      
    }  
    
    else{  
        echo "<script>alert('Login Unsuccessful')</script>";  

        include 'Sign-in-page.php';
    } 
   



?> 




