<?php include("header.php"); ?>
    <div class="checkout">
        <?php session_start(); ?>
        <h1 style="color: #000;">Checkout</h1>
        <?php
		if(isset($_SESSION['uservalid']) && $_SESSION['uservalid'] === "yes") {
            $totalItemPrice = [];
            foreach($_SESSION['cart'] as $key => $value) {
                $totalItemPrice[] .= $value['product_price'] * $value['product_quantity'];
            }
            foreach($totalItemPrice as $price) {
                $totalPrice += $price;
            }
            echo '<p style="color: #000;">To pay: £' . $totalPrice . '</p>';
            ?>
            <form action="/checkout-function.php" method="post">
                <div class="checkout-container">
                    <p class="checkout-container-text">Full Name: </p>
                    <input type="text" name="username" class="checkout-container-input" required>
                </div>
                <div class="checkout-container">
                    <p class="checkout-container-text">Email Address: </p>
                    <input type="email" name="email" class="checkout-container-input" required>
                </div>
                <div class="checkout-container">
                    <p class="checkout-container-text">Address: </p>
                    <input type="text" name="address" class="checkout-container-input" required>
                </div>
                <div class="checkout-container">
                    <p class="checkout-container-text">Postcode: </p>
                    <input type="text" name="postcode" class="checkout-container-input" required>
                </div>
                <div class="checkout-container">
                    <p class="checkout-container-text">City: </p>
                    <input type="text" name="city" class="checkout-container-input" required>
                </div>
                <div class="checkout-container">
                    <p class="checkout-container-text">Country: </p>
                    <input type="text" name="country" class="checkout-container-input" required>
                </div>
                <div class="checkout-container">
                    <p class="checkout-container-text">Phone Number: </p>
                    <input type="text" name="phone" class="checkout-container-input" required>
                </div>
                <button id="checkout_button">Checkout</button>
            </form>
        <?php } else { ?>
            <p style="color: #000;">You must be logged in to checkout</p>
            <a href="log-in-page.php" style="color: #000;">Login</a>
        <?php } ?>
    </div>
</body>
</html>
