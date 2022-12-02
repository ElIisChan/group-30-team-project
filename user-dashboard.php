<?php include("header.php"); ?>
<link rel="stylesheet" href="css/user-dashboard.css">
    <section class="main-container">
        <?php if($_SESSION['user_id'] != 1){ ?>
            <center>
                <h1>User Dashboard</h1>
            </center>
            <div class="user-profile">
                <ul>
                    <li class="profile-item">Username:
                        <span>
                            <?php if (isset($_SESSION['username'])) {
                                echo $_SESSION['username'];
                            } ?>
                        </span>
                    </li>
                    <li class="profile-item">Email Address:
                        <span>
                            <?php if (isset($_SESSION['email'])) {
                                echo $_SESSION['email'];
                            } ?>
                        </span>
                    </li>
                    <li class="profile-item">Password:
                        <span>
                            <?php if (isset($_SESSION['password'])) {
                                echo $_SESSION["password"];
                            } ?>
                        </span>
                    </li>
                </ul>
            </div>
        <?php } else {
			$db = new mysqli("localhost", "u-210109870", "mVrSNyGnFNSJTDU", "u_210109870_db");
			$result = $db->query("SELECT * FROM products");
			if($result->num_rows > 0){ ?>
                <div class="admin-container">
                    <h1>Admin Dashboard</h1>
					<?php while($row = $result->fetch_object()) { ?>
                        <div class="admin-product-container">
                            <h3 class="product-container-pro-heading">Product Name: <?php echo $row->p_name; ?></h3>
                            <div class="admin-info">
                                <div>
                                    <h3>Price:</h3>
                                    <p>£<?php echo $row->p_price; ?></p>
                                    <h3>Remaining Stock:</h3>
                                    <p><?php echo $row->p_stockcount; ?></p>
                                </div>
                            </div>
                        </div>
					<?php } ?>
                </div>
			<?php }
        } ?>
    </section>

















