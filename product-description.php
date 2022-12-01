<?php
    session_start(); 
    function fetchproductInfo(){
        include('connection.php');
        $sth = $db->prepare("SELECT ALL * FROM products;");    
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            echo result exit;

        }



    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        fetchproductInfo();
    }
    else{
        echo '{"success":false,"message":"incorrect request method"}'; exit;
    }
?>