<?php include("header.php");
if (isset($_POST['product_price'])) {
	session_start();
	$product_price = $_POST['product_price'];
	$product_id = $_POST['product_id'];
	$product_quantity = $_POST['quantity'];
	$product_name = $_POST['product_name'];
	if(isset($_SESSION['cart'])) {
		$cart = $_SESSION['cart'];
		if(isset($cart[$product_id])) {
			echo '<p style="padding: 25px 0; width: 80%; margin: 0 auto; color: #000;">Product already in cart</p>';
		} else {
			$cart[$product_id] = array("product_name" => $product_name, "product_id" => $product_id, "product_price" => $product_price, "product_quantity" => $product_quantity);
		}
		$_SESSION['cart'] = $cart;
	} else {
		$cart = array();
		$cart[$product_id] = array("product_name" => $product_name, "product_id" => $product_id, "product_price" => $product_price, "product_quantity" => $product_quantity);
		$_SESSION['cart'] = $cart;
	}
	echo '<div class="cart-container" style="padding: 25px 0; width: 80%; margin: 0 auto;">';
		foreach($_SESSION['cart'] as $key => $value) {
			echo '<p style="color: #000;">Product Name:' . $value['product_name'] . ' Product Price: £' . $value['product_price'] . ' Quantity:' . $value['product_quantity'] . '</p>';
		}
	echo '</div>';
	echo '<a href="checkout-page.php" style="padding: 25px 0; width: 80%; margin: 0 auto; color: #000; display: block;">Checkout</a>';
} else {
	echo '<h1 style="color: #000;">No product data, return to store</h1>';
	echo '<a style="color: #000;" href="index.php">Return to store</a>';
}
