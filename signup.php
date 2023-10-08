<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/signup.css">
</head>
<body>
    <!-- Include a navbar if needed -->
    <?php
    include "navbar.php";
    ?>

<!-- <h1>Sign In</h1>
    <div class="sigin">
        <img src="./assest/signin.jpg" alt="">
    

      
        <label for="username">Username</label><br>
        <input type="text" class="use" id="username" placeholder="Enter here ..."><br><br>

        <label for="password">Password</label><br>
        <input type="password" class="pas" id="password" placeholder="Enter Password here ..."><br>

        <div class="social-icons">
            <a href="mailto:youremail@gmail.com">
                <img src="./assest/G-mail.png" alt="Gmail" width="32" height="32">
            </a>
            <a href="https://www.facebook.com/yourpage">
                <img src="./assest/Facebook.png" alt="Facebook" width="32" height="32">
            </a>
            <a href="https://apps.apple.com/us/app/your-app-name/id1234567890">
                <img src="./assest/Apple.png" alt="Apple App" width="32" height="32">
            </a>
        </div>

        <div>
            <button type="submit" class="btn">SIGN IN</button>
        </div>

        <div class="register-link">
            Don't have an Account? <a href="#">Sign Up</a>
        </div>
    </div> -->






<div class="container">
    <div class="left">
    </div>
    <div class="right">
        <div>
            <form action="">
            <div class="main"><h1>Create Your Account</h1>
            </div><br>
            <div class="name">
                <label for=""><b>Name</label></b><br> <br>
                <input type="text" require>
            </div><br>
            <div class="email">
                <label for=""><b>E-Mail</b></label> <br><br>
                <input type="text">
            </div><br>
            <div class="pwd">
                <label for=""><b>Password</label></b><br> <br>
                <input type="password" require>
            </div><br>
            <div class="confirm-pwd">
                <label for=""><b>Confirm Password</label></b><br> <br>
                <input type="password" require>
            </div><br>
            <div class="icons">
                <!--<div class="icons"><a href="facebook"></a></div>
                <div class="icons"><a href="email"></a></div>
                <div class="icons"><a href="apple"></a></div>-->
                <div class="icon" id="facebook"></div>
               <div class="icon" id="email"></div>
              <div class="icon" id="apple"></div>
            </div>
            <div class="done"><button type="submit">Sign Up</button></div>
            <div class="noacc"> Already have an account?<a href="#">Sign in</a> </div>

            </form>
        </div>
    </div>
</div>




















    <!-- Include a footer if needed -->
    <?php include "footer.php"; ?>

</body>
</html>