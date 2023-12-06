<!DOCTYPE html>
<head><title>Subscription</title>
<link rel="stylesheet" href="./css/pricing.css">
<link rel="icon" href="./assest/01.png">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-48LQRBV96R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-48LQRBV96R');
</script>
</head>
<body>

<?php
    include "cursor.php";
    ?>
<?php
        include "navbar.php";
    ?>
        
       
        <div class="container">
                
                <a href="#" class="button button1">
                              
                        <ul class="circle ">
                        <span>Free</span> 
                        <br><br><hr><br>
                         <li>Audio to text</li>
                         <br><br><br><br><br><br><br><br><br><br><br>
                         <center><span class="t3">Free</span></center>

                        </ul>
                        
                </a>
        <a href="#" class="button button2">
                
                <ul class="circle">
                <span>Basic</span>
                <br><br><hr><br>
                <li>Audio to text</li>
                <br>
                <li>Max video/Audio length up to 2hours.
                </li> 
                <br><br><br><br><br><br><br><br><br><br>
                <center><span class="t1">$5</span><span class="t2">.00</span></center>       
                </ul>

        </a>
        <a href="#" class="button button3">
                <ul class="circle">
                        <span>Pro</span>
                        <br><br><hr><br>
                        <li>Video to text</li>
                        <br>
                        <li>Unlimited video length
                        </li>
                        <br>
                        <li>Unlimited conversion</li>
                        <br>
                        <li>24 customer service</li>
                        <br>
                        <li>Language conversion
                                Audio prompt input</li>
                                <br>
                                <center><span class="t1">$10</span><span class="t2">.00</span></center>       
                </ul>
        </a>
        </div> 
        <br>
        <h1><center>Select a plan</center></h1>
        <br>
        <?php include "footer.php"; ?>
       






</body>