<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/siginin.css">
</head>


<body>

<?php
    include "navbar.php";
      ?>
<div class="sigin">
  <img src="./assest/signin.jpg" alt="">
</div>

<div class="content">
                     <div class="topic">
                               <p>Sign In</p>
                    </div>
                
                     <div class="form1" method="post" action="your-action-url.php">


                            <label for="">Username</label><br>
                           <input type="text" class="use" placeholder="Enter here ..." ><br>
                           <br>
                           <label for="">Password</label><br>

                           <input type="password" class="pas" placeholder="Enter Password here ... " >

                           <br>






                    </div>



























</div>


<button type="submit" class="btn">SIGN IN</button>

<?php include "footer.php"; ?>

</body>
</html>