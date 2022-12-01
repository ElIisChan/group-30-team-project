<?php include("header.php");
if (isset($_POST['submit'])) {
	session_start();
	echo $_POST['product_price'];
	echo $_POST['product_id'];
}
