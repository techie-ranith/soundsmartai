<!DOCTYPE html>
<html>
<head>
    <title>Subscription</title>
    <link rel="stylesheet" href="./css/subscription.css">
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
        
<?php include "navbar.php";
    ?>
<?php include "cursor.php";
    ?>
  
        
    <br><br><br><br><br><br>




    <div class="container">
        <a href="./siginin.php" class="button button1">
            <div class="top"><br>
                <span>Free</span>
                
        </div>
            <div class="middle">
                <ul class="circle">
                    <li>Audio to text</li>
                    <br><br><br><br>
                    <br><br><br><br>
                    <br><br><br>
                </ul>
            </div>
            <div class="bottom">
                <span class="t3">Free</span>
            </div>
        </a>
        <a href="./payment.php" class="button button2">
            <div class="top"><br>
                <span>Basic</span>
                
        </div>
            <div class="middle">
                <ul class="circle">
                    <li>Audio to text</li><br>
                    <li>Max video/Audio length up to 2 hours.</li>
                    <br><br><br><br><br><br><br><br><br><br>
                </ul>
                
            </div>
            <div class="bottom">
                <span class="t1">$5</span><span class="t2">.00</span>
            </div>
        </a>
        <a href="./payment.php" class="button3">
            <div class="top"><br>
                <span>Pro</span>
                
            </div>
            <div class="middle">
                <ul class="circle">
                    <li>Video to text</li><br>
                    <li>Unlimited video length</li><br>
                    <li>Unlimited conversion</li><br>
                    <li>24 customer service</li><br>
                    <li>Language conversion Audio prompt input</li>
                    <br>
                </ul>
            </div>
            <div class="bottom">
                <span class="t1">$10</span><span class="t2">.00</span>
            </div>
        </a>

    </div>
    <br><br><br><br><br>
    
    <?php include "footer.php"; ?>

    
</body>


</html>
