<?php include("header.php"); ?>
<link rel="stylesheet" href="/sign-up-page.css">
    <div class="sign_form">
        <div class="sign_form_heading">
            <h1>Tech Atlas SignUp</h1>
        </div>
        <form action="./sign-up-function.php" method="post">
            <div class="sign_form-container">
                <p class="sign_form-container-text">Full Name: </p>
                <input type="text" name="username" class="sign_form-container-input" required>
            </div>

            <div class="sign_form-container">
                <p class="sign_form-container-text">Email Address: </p>
                <input type="email" name="email" class="sign_form-container-input" required>
            </div>
            <div class="sign_form-container">
                <p class="sign_form-container-text">Password: </p>
                <input type="password" name="password" class="sign_form-container-input" required>
            </div>


            <button id="sign_form_button">Sign Up</button>
        </form>
    </div>



</body>

</html>
