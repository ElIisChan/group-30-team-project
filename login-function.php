<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE);
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "saim-database";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

$email = $_GET['email'];  
$password = $_GET['password'];  

    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  
    
    $sql = "SELECT username,email,password from `user-details`  where email = '$email' and password = '$password' ";  
    $result = mysqli_query($con, $sql);  
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
   
   
      
    if($count == 1){  
        $row = mysqli_fetch_assoc($result);
       
        $_SESSION["username"] = $row["username"];
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




