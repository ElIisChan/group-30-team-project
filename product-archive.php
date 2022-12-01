



<?php
    session_start(); 
    function fetchProducts(){
        include('connection.php');
        $sth = $db->prepare("SELECT * FROM products;");    
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            echo result exit;

        }



    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        fetchProducts();
    }
    else{
        echo '{"success":false,"message":"incorrect request method"}'; exit;
    }
?>