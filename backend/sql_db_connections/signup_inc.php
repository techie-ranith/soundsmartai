<?php
  if (isset($_POST["submit"]))
  {
    $name= $_POST["name"];
    $email  = $_POST["email"];
    $pwd= $_POST["password"];
    $co_pwd= $_POST["confirm_pass"];
  
    require_once "sql_db_connection.php";
    require_once "function_inc.php";

    $emptyInput = emptyInputsign($name, $email, $pwd, $co_pwd);
    $invalidEmail = invalidEmail($email);
    $pwdMatch = pwdMatch($pwd, $co_pwd);
    $emailExists = emailExists($conn, $email);
    
//check empty inputs
    if($emptyInputsign !== false)
    {
      header('location: ../../signup.php?error=emptyinputssignup');
      exit();
    }
//check invalid email
    if($invalidEmail !== false)
    {
      header('location: ../../signup.php?error=invalidemail');
      exit();
    }
//check password match
    if($pwdMatch !== false)
    {
      header('location: ../../signup.php?error=passwordsdontmatch');
      exit();
    }
//check email exists
    if($emailExists !== false)
    {
      header('location: ../../signup.php?error=emailalreadyexists');
      exit();
    }

    createUser($conn, $name, $email, $pwd);


  }
  else
  {
    header('location: ../../signup.php');
    exit();
  }


  






  ?>