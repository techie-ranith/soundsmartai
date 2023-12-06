<html>
<head>
  <link rel="stylesheet" type="text/css" href="./css/payment.css">
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
        
        

          

    
   <div class="container"> 
       <div class="ct2">
                             
                                
                                  <table>
                                          <td>
                                             <p class="details">Payment details<p>
                                    <form>
                                   <div>
                                      <label for="email">Email Address</label>
                                      <input type="email" id="email" name="email" required>
                                   </div>
                                    <div>
                                      <label for="card-number">Credit Card Number</label>
                                      <input type="text" id="card-number" name="card-number" required>
                                    </div>
                                    <div>
                                      <label for="expiry-date">Expiry Date</label>
                                      <input type="text" id="expiry-date" name="expiry-date" required>
                                    </div>
                                    <div>
                                      <label for="cvv">CVV</label>
                                      <input type="text" id="cvv" name="cvv" required>
                                    </div>
                                  </form>
                                  
                                  <a href="./signup.php">
                                  <button class="button">Subscribe Monthly</button></a>
                                </td>
                               <td>
                                <p class="select"> Select a plan</p>
                                <div class="plan-container">
                                  <div class="plan-card">
                                  <h2 class="plan-name">Free</h2>
                                  <ul class="plan-features">
                                  <li class="plan-feature">Audio to text conversion with a maximum video/audio length of up to <b>2 hours</b></li>
                                  <p class="plan-price">$0.00</p>
                                  </ul>
                                </td>
                                  
                                  </div>
                                  </div>
                                <td>
                                  <br><br><br>
                                  <div class="plan-card">
                                  <h2 class="plan-name">Basic</h2>
                                  <ul class="plan-features">
                                  <li class="plan-feature">Unlimited conversion</li>
                                  <p class="plan-price">$5.00</p>
                                  </ul>
                                  </div>
                                  </div>
                                </td>
                                  
                               <td>
                                <br><br><br>
                                  <div class="plan-card">
                                  <h2 class="plan-name">Pro</h2>
                                  <ul class="plan-features">
                                  <li class="plan-feature">Unlimited conversion, language support and auto prompt recognition.</li>
                                  <p class="plan-price">$10.00</p>
                                  </ul>
                                  </div>
                               
                                </td>
                        
                             </table>
        </div>
    </div>

  
        
     
    
  
  
<?php include "footer.php"; ?>

</body>
</html>
