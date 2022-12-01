<?php
session_start();
$order[] = $_SESSION['cart'];
$db = new mysqli("localhost", "u-210109870", "mVrSNyGnFNSJTDU", "u_210109870_db");;
$db->query("INSERT INTO order_details (user_id) VALUES (" . $_SESSION['user_id'] . ")");
foreach($order as $key => $value) {
	$db->query("INSERT INTO order_items (order_id, product_id) VALUES (" . $db->insert_id . ", " . $value['product_id'] . ", " . $value['product_quantity'] . ")");
	$db->query("UPDATE products SET p_stockcount = p_stockcount - " . $value['product_quantity'] . " WHERE id = " . $value['product_id']);
}
session_destroy();

header("Location: index.php");
?>
