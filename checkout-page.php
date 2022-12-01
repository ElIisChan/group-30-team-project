<?php include("header.php"); ?>
    <div class="checkout">
        <div class="checkout_wrap">
            <?php session_start(); ?>
            <h1>Checkout</h1>
            <?php
            $totalItemPrice = [];
            foreach($_SESSION['cart'] as $key => $value) {
			    $totalItemPrice[] .= $value['product_price'] * $value['product_quantity'];
		    }
            foreach($totalItemPrice as $price) {
                $totalPrice += $price;
            }
            echo 'To pay: ' . $totalPrice;
            ?>
        </div>
    </div>
</body>
</html>
