<?php include("header.php"); ?>
<link rel="stylesheet" href="css/mainpage.css">
<link rel="stylesheet" href="css/user-dashboard.css">
    <div class="logo-container">
        <h2>Tech Atlas</h2>
    </div>
    <div class="login-options">
        <a style='color:black;' href='#'> <svg xmlns='http://www.w3.org/2000/svg' width='26'
            height='26' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
                <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z' />
            </svg>
        </a>
    </div>
    <div class="navigation-menu">
        <ul>
        <li class="navitem"><a href="mainpage.html" class="link">Home</a> </li>
        <li class="navitem"> <a href="cars-page.html" class="link">Cars</a> </li>
        <li class="navitem"> <a href="contact-page.html" class="link">Contact Us</a></li>
        <li class="navitem"> <a href="about-us-page.html" class="link">About Us</a></li>           
         </ul>
        </div>
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

















