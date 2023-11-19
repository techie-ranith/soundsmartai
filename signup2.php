<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="../css/signup.css"> -->
</head>
<body>
    

<!-- <div class="container">
    <div class="left">
    </div>
    <div class="right">
        <div>
            <form id="SignUp" action="backend/sql_db_connections/signup.php" method="POST">
                <div class="main"><h1>Create Your Account</h1>
                </div><br>
                <div class="name">
                    <label for=""><b>Name</label></b><br> <br>
                    <input type="text" id="name" name="name" require>
                </div><br>
                <div class="email">
                    <label for=""><b>E-Mail</b></label> <br><br>
                    <input type="text"  name="email">
                </div><br>
                <div class="pwd">
                    <label for=""><b>Password</label></b><br> <br>
                    <input type="password" id="password" name="password" require>
                </div><br>
                <div class="confirm-pwd">
                    <label for=""><b>Confirm Password</label></b><br> <br>
                    <input type="password" name="confirm_pass" require>
                </div><br>
                
                <div class="icons">
               
                    
              <div class="icon" id="facebook"></div>
             <div class="icon" id="email"></div>
              <div class="icon" id="apple"></div>
                
                </div>

                
                <div class="done"><button type="submit">Sign Up</button></div>
                <div class="noacc"> Already have an account?<a href="#">Sign in</a> </div>
            </form>
        </div>
    </div>
</div> -->

<div>
    <div style="" class=""></div>
    <div>
            <div>
                <div>Create Your Account</div>
                <form action="../server/signup.php" method="POST">
                    <div>
                        <label for="">Name</label>
                        <input type="text" placeholder="Name" name="name" required>
                    </div>
                    <div>
                        <label for="">E-mail</label>
                        <input type="text" placeholder="email" name="email" required>
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="text" placeholder="password" name="password" required>
                    </div>
                    <div>
                        <label for="">Confirm password</label>
                        <input type="text" name="confirm_pass" placeholder="confirm password" required>
                    </div>
                    <div>
                        <div style="" class=""></div>
                        <div style="" class=""></div>
                        <div style="" class=""></div>
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
                <div>Already have an account? <a href="">Sign In</a></div>
            </div>
    </div>
</div>

</body>
</html>