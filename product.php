<?php include("header.php"); ?>
<link rel="stylesheet" href="/products-page.css">
<div class="product-container" style="margin-top: 25px;">
	<?php
	$db = new mysqli("localhost", "u-210109870", "mVrSNyGnFNSJTDU", "u_210109870_db");;
	$result = $db->query("SELECT * FROM products WHERE product_id = " . $_GET['id']);
	if($result->num_rows > 0){ ?>
		<div class="product-container-big">
			<?php while($row = $result->fetch_object()) { ?>
				<div class="product-container-pro ">
					<div class="product-container-image">
						<h3 class="product-container-pro-heading"><?php echo $row->p_name; ?></h3>
						<img src="img/<?php echo $row->p_imageid; ?>.jpg" width="100%" height="auto" alt="">
					</div>
					<div class="information-container">
						<div>
							<h3>Price:</h3>
							<p>£<?php echo $row->p_price; ?></p>
							<h3>Remaining Stock:</h3>
							<p><?php echo $row->p_stockcount; ?></p>
						</div>
						<form action="cart.php" method="post">
							<input type="number" name="quantity" value="1" min="1" max="<?php $row->p_stockcount; ?>" placeholder="Quantity" required>
                            <input type="hidden" name="product_price" value="<?php $row->p_price; ?>">
							<input type="hidden" name="product_id" value="<?php $row->product_id; ?>">
							<input type="submit" value="Add To Cart">
						</form>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php } else {
		echo "No products available";
	}
	?>
</div>

</body>

</html>
