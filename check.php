<?php
ob_start(); 
session_start();

$user = $_POST["user"];
$pwd = $_POST["passwd"];

$username = "Amber";
$userpwd = "ifno123";

if($user == $username && $pwd == $userpwd){
    $_SESSION["login"] = "S";
    $_SESSION["USER"] = $user;

    echo "Login Success";
    header('location:catalog.php');
}
else{
    $_SESSION["login"] = "F";
    echo "Login Failed, back to login page in 3 seconds";
    echo "<meta http-equiv = 'refresh'
            content = '3 ; url = login.php'/>";
    // header('location:login.php');
}

?>