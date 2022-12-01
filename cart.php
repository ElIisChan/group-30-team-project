<?php include("header.php");
if (isset($_POST['product_price'])) {
	session_start();
	echo $_POST['product_price'];
	echo $_POST['product_id'];
} else {
	print_r($_POST);
	echo'post';
}
