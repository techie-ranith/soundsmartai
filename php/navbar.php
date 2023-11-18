<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/animation.css">
  <!-- mediaqurees -->
<link rel="stylesheet" href="../css/media-index.css">
<!-- tailwinf -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- animation -->
</head>
<body>
   <!-- TOP BAR -->
   <div class="topbar"> 

<img class="img1" src="../assets/01.png" >   

<a class="i" href="../php/index.php" >Home</a>
<a class="i" href="../php/faq.php">Support</a>
<a class="i" href="../php/subscription.php">Pricing</a>
<a class="i" href="../php/about.php">About</a>
<a class="i" href="../php/siginin.php">Signin</a>
<a class="i" href="../php/signup.php">SignUp</a>
<a href="" class="togle">
<span class="menu"></span>
<span class="menu"></span> 
<span class="menu"></span>
</a>

</div>        

<div class="topbar2"> 
  <div class="floatl">
    <img class="img2" src="./assest/01.png" >
  </div>
  <div class="floatr">
  <a  onclick=showqw() class="togle">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>

  </a>
</div>
  <div class="qw">
    <div class="w">
  <a onclick=hideqw() href=""><img src="./assest/close1.png" class="close" alt=""></a>
  <a class="q" href="./index.php" >Home</a>
  <a class="q" href="./faq.php">Support</a>
  <a class="q" href="./subscription.php">Pricing</a>
  <a class="q" href="#about">About</a>
  <a class="q" href="./siginin.php">Signin</a>
  <a class="q" href="./signup.php">SignUp</a>
</div>
</div>
<script>
  function showqw(){
    const qw = document.querySelector('.qw');
    qw.style.display = 'block'
  }

  function hideqw(){
    const qw = document.querySelector('.qw');
    qw.style.display = 'none'
  }
</script>
   
  </div>        



  
</body>
</html>