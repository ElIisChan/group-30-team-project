<?php include("header.php");
if (isset($_POST['product_price'])) {
	session_start();
	$product_price = $_POST['product_price'];
	$product_id = $_POST['product_id'];
	$product_quantity = $_POST['product_quantity'];
	if(isset($_SESSION['cart'])) {
		$cart = $_SESSION['cart'];
		$cart[$product_id] = array("product_id" => $product_id, "product_price" => $product_price, "product_quantity" => $product_quantity);
		$_SESSION['cart'] = $cart;
	} else {
		$cart = array();
		$cart[$product_id] = array("product_id" => $product_id, "product_price" => $product_price, "product_quantity" => $product_quantity);
		$_SESSION['cart'] = $cart;
	}

	print_r($_SESSION['cart']);

//	foreach($_POST as $key=>$post_data){
//		echo "You posted:" . $key . " = " . $post_data . "<br>";
//	}
} else {
	echo '<h1>No product data, return to store</h1>';
	echo '<a href="index.php">Return to store</a>';
}
