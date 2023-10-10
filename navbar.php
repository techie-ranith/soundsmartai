<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/animation.css">
  <!-- mediaqurees -->
<link rel="stylesheet" href="./css/mediaquree.css">
<!-- tailwinf -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- animation -->
</head>
<body>
   <!-- TOP BAR -->
   <div class="topbar"> 

<a  href="./index.html"><img class="img1" src="./assest/01.png" >    </a>


<a href="" class="togle">
  <?php
if (isset($_SESSION['user_id'])) {
    // User is logged in
    $navbarContent = '
    <a class="i" href="./about">About</a>
    <a class="i" href="./siginin.php">Signin</a>
    <a class="i" href="./signup.php">SignUp</a>
    ';
} else {
    // User is not logged in
    $navbarContent = '
    <a class="i" href="./index.php" >Home</a>
    <a class="i" href="./faq.php">Support</a>
    <a class="i" href="./subscription.php">Pricing</a>
    <a class="i" href="#about">About</a>
    <a class="i" href="./siginin.php">Signin</a>
    <a class="i" href="./signup.php">SignUp</a>
    ';
}
?>

<span class="menu"></span>
<span class="menu"></span> 
<span class="menu"></span>
</a>

</div>        



  
</body>
</html>