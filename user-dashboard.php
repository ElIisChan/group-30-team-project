<?php include("header.php"); ?>
<link rel="stylesheet" href="css/user-dashboard.css">
    <section class="main-container">
        <center>
            <h1>User Dashboard</h1>
        </center>
        <div class="user-profile">
            <ul>
                <li class="profile-item">Username: <span> <?php
                                                                if (isset($_SESSION['username'])) {
                                                                    echo $_SESSION['username'];
                                                                }

                                                                ?></span> </li>
                <li class="profile-item">Email Address: <span> <?php
                                                                if (isset($_SESSION['email'])) {
                                                                    echo $_SESSION['email'];
                                                                }
                                                                ?></span> </li>
                <li class="profile-item">Password: <span><?php
                                                            if (isset($_SESSION['password'])) {
                                                                echo $_SESSION["password"];
                                                            }


                                                            ?></span> </li>
            </ul>
        </div>

    </section>

















