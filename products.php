<?php include("header.php"); ?>
    <link rel="stylesheet" href="/products-page.css">
    <div class="main-image">
        <img src="./TechAtlas_files/product.jpeg" height="870" width="1519" alt="">
    </div>
    <center>
        <div class="main-image-text">
            <h1>Click & Tech</h1>
            <p>A wide and premium range for all your needs!</p>
        </div>
    </center>
    <div class="product-container">
        <h2>Available Items</h2>
        <?php
        $db = new mysqli("localhost", "u-210109870", "mVrSNyGnFNSJTDU", "u_210109870_db");
        $result = $db->query("SELECT * FROM products");
        if($result->num_rows > 0){ ?>
            <div class="product-container-big">
                <?php while($row = $result->fetch_object()) { ?>
                    <div class="product-container-pro ">
                        <div class="product-container-image">
                            <h3 class="product-container-pro-heading"><?php echo $row->p_name; ?>></h3>
                            <img src="img/<?php echo $row->p_imageid; ?>.jpg" width="100%" height="auto" alt="">
                        </div>
                        <div class="information-container">
                            <div>
                                <h3>Price:</h3>
                                <p><?php echo $row->p_price; ?></p>
                                <h3>Remaining Stock:</h3>
                                <p><?php echo $row->p_stockcount; ?></p>
                            </div>
                            <a href="product.php?id=<?php echo $row->p_id; ?>" class="product-container-pro-button">View Product</a>
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
