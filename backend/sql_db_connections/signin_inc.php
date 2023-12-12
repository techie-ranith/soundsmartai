<?php
if (isset($_POST["submit"]))
{
  $email  = $_POST["email"];
  $pwd = $_POST["password"];
  require_once "sql_db_connection.php";
  require_once "function_inc.php";

  loginuser($username, $pwd);

        if(emptyinput($email, $pwd) !== false)
        {
          exit();
        }
        loginUser($conn, $email, $pwd);
        

        




}
else
{
  header('location: ../../siginin.php');

}
?>