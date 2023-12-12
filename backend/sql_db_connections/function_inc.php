<?php


function emptyInputssign($name, $email, $pwd, $co_pwd){
    $result;

    if(empty($name) || empty($email) || empty($pwd) || empty($co_pwd))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
 }

//  function $invalidEmail = invalidEmail($email);
//  {
//     $result;
 
//     if(!preg_match("/[a-zA-Z0-9]*$/", $email))
//     {
//         $result = true;
//     }
//     else
//     {
//         $result = false;
//     }
//  }

function invalidEmail = invalidEmail($email);
 {
    $result;
 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
 }

function pwdMatch($pwd, $co_pwd){
    $result;

    if($pwd !== $co_pwd)
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
 }
 
 function emailExists($conn, $email)
 {
    $sql= "  SELECT * FROM user WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header('location: ../../signup.php?error=stmtfailed');
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else
    {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

 }

 function createUser($conn, $name, $email, $username, $pwd)
 {

    $sql= "  INSERT INTO user (name, email, username, pwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header('location: ../../signup.php?error=stmtfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../../siginin.php?error=none');
    exit();

 }

 function emptyInput($email, $pwd){
    $result;

    if(empty($email) || empty($pwd))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;



 }
 function loginUser($conn, $email, $pwd)
{
    $emailExists = emailExists($conn, $email);

    if($emailExists === false)
    {
        header('location: ../../siginin.php?error=wronglogin');
        exit();
    }

    $pwdHashed = $emailExists["pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false)
    {
        header('location: ../../siginin.php?error=wronglogin');
        exit();
    }
    else if($checkPwd === true)
    {
        session_start();
        $_SESSION["userid"] = $emailExists["U_id"];
        $_SESSION["useremail"] = $emailExists["email"];
        header('location: ../../function.php');
        exit();
    }
}
?>
