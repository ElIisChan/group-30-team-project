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
        <!-- product query  -->
            <h2>Available Items</h2>

            <?php
                $result = database_connection()->query("SELECT * FROM products");
                if($result->num_rows > 0){
                    while($row = $result->fetch_object()) {
                        echo $row;
                    }
                }else{
                    echo "No products available";
                }
            ?>
            <div class="product-container-big">
                <div class="product-container-sub">
                    <div class="product-container-pro ">

                        <div class="product-container-image">
                            <h3 class="product-container-pro-heading">Opel Corsa</h3>
                            <img src="img/Car1.png" alt="">
                        </div>
                        <div class="information-container">
                            <div>
                                <ul>
                                    <li>Free cancellation (48h)</li>
                                    <li>Fair fuel policy</li>
                                    <li>Unlimited mileage</li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li>Theft coverage</li>
                                    <li>Collision damage waiver</li>
                                    <li>Liability coverage</li>
                                </ul>
                            </div>

                            <div>
                                <center>
                                    <button name="product-type" type="submit" value="1">View Deal</button>
                                </center>
                            </div>

                        </div>
                    </div>
                    <div class="product-container-pro ">

                        <div class="product-container-pro">
                            <h3 class="product-container-pro-heading">Citron C3 Aircross</h3>
                            <img src="img/Citron C3 Aircross.png" alt="">
                        </div>
                        <div class="information-container">
                            <div>
                                <ul>
                                    <li>Free cancellation (48h)</li>
                                    <li>Fair fuel policy</li>
                                    <li>Unlimited mileage</li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li>Theft coverage</li>
                                    <li>Collision damage waiver</li>
                                    <li>Liability coverage</li>
                                </ul>
                            </div>

                            <div>
                                <center>
                                    <button name="product-type" type="submit" value="2">View Deal</button>
                                </center>
                            </div>

                        </div>
                    </div>
                    <div class="product-container-pro ">

                        <div class="product-container-image">
                            <h3 class="product-container-pro-heading">Fiat-500</h3>
                            <img src="img/Fiat-500.png" alt="">
                        </div>
                        <div class="information-container">
                            <div>
                                <ul>
                                    <li>Free cancellation (48h)</li>
                                    <li>Fair fuel policy</li>
                                    <li>Unlimited mileage</li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li>Theft coverage</li>
                                    <li>Collision damage waiver</li>
                                    <li>Liability coverage</li>
                                </ul>
                            </div>

                            <div>
                                <center>
                                    <button name="product-type" type="submit" value="3">View Deal</button>
                                </center>
                            </div>

                        </div>
                    </div>
                    <div class="product-container-pro ">

                        <div class="product-container-image">
                            <h3 class="product-container-pro-heading">Peugeot-208</h3>
                            <img src="img/Peugeot-208.png" alt="">
                        </div>
                        <div class="information-container">
                            <div>
                                <ul>
                                    <li>Free cancellation (48h)</li>
                                    <li>Fair fuel policy</li>
                                    <li>Unlimited mileage</li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li>Theft coverage</li>
                                    <li>Collision damage waiver</li>
                                    <li>Liability coverage</li>
                                </ul>
                            </div>

                            <div>
                                <center>
                                    <button name="product-type" type="submit" value="4">View Deal</button>
                                </center>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


        </form>
    </div>

</body>

</html>
