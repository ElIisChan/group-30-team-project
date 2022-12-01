<?php include("header.php");
if (isset($_POST['submit'])) {
	if(isset($_COOKIE['cart'])) {
		$cookie_data = stripslashes($_COOKIE['cart']);
		$cart_data = json_decode($cookie_data, true);
	} else {
		$cart_data = array();
	}
	setcookie('cart', $_POST['cart'], time() + 3600);
}
