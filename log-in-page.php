<?php include("header.php"); ?>
<link rel="stylesheet" href="/login-in-page.css">
    <div class="mainContainer" style="margin-bottom:200px ;">
        <div class="background" style="margin-bottom:200px ;">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form method="get" action="./login-function.php" style="margin-bottom: 400px ;">
            <h3>Login Here</h3>

            <label for="username">Email: </label>
            <input type="text" id="username" name="email">

            <label for="password">Password: </label>
            <input type="password" id="password" name="password">

            <button>Log In</button>

        </form>
    </div>



</body>
</html>
