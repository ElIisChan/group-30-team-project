<?php include("header.php"); ?>
    <div class="checkout">
        <?php session_start(); ?>
        <h1 style="color: #000;">Checkout</h1>
        <?php
        $totalItemPrice = [];
        foreach($_SESSION['cart'] as $key => $value) {
            $totalItemPrice[] .= $value['product_price'] * $value['product_quantity'];
        }
        foreach($totalItemPrice as $price) {
            $totalPrice += $price;
        }
        echo '<p style="color: #000;">To pay: ' . $totalPrice . '</p>';
        ?>
    </div>
</body>
</html>
