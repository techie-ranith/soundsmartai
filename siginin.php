<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-48LQRBV96R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-48LQRBV96R');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/siginin.css">
    <link rel="stylesheet" href="./css/media-signin.css">
</head>
<body>
    
    <!-- Include a navbar if needed -->
    <?php    include "cursor.php";?>
    <?php    include "navbar.php";?>
    <?php
        if (isset($_SESSION['error'])) {
        // Display the error message
        echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';

        // Clear the session variable to avoid displaying the same error multiple times
        unset($_SESSION['error']);
        }
    ?>
<div class="container">
    <div class="left">
    </div>
    <div class="right">
        <div>
            <form action="backend/sql_db_connections/signin.php" method="POST">
                <div class="main"><h1>Sign In</h1>
                </div>
                <div class="email">
                    <label for=""><b>E-Mail</label></b><br><br>
                    <input type="text" name="email"  require>
                </div><br>
                <div class="pwd">
                    <label for=""><b>Password</b></label> <br><br>
                    <input type="password"  name="password">
                </div><br>
                <div class="icons">
                <div class="icon" id="facebook"></div>
                <div class="icon" id="email"></div>
                <div class="icon" id="apple"></div>
                </div>
                <div class="done"><button type="submit">Sign In</button></div>
                <div class="noacc"> Don't have an Account?<a href="#">Sign Up</a> </div>
            </form>
        </div>
    </div>
</div>

    <?php include "footer.php"; ?>
</body>
</html>
