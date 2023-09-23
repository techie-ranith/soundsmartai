<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./css/siginin.css">
<body>
<?php
    include "navbar.php";
      ?>

<div class="wrapper">
        <form name="SignInForm" method="post" action="your-action-url.php">
            <h1>Sign In</h1>
            E-Mail:<br>
            <input type="text" name="txtmne"> 
            <i class='bx bx-envelope'></i><br>
            Password:<br>
            <input type="password" name="pwd">
            <i class='bx bxs-lock-alt'></i><br> 
            <br>
            <button type="submit" class="btn">SIGN IN</button>

            <div class="register-link">
               Don't have an Account? <a href="#">Sign Up</a>
            </div>
        </form>
    </div>



























<?php include "footer.php"; ?>

</body>
</html>