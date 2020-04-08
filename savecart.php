<?php
ob_start();
session_start();

if ( isset($_SESSION["id"]) ) {
   $id = $_SESSION["id"];
   $name = $_SESSION["name"];
   $price = $_SESSION["price"];
   $quantity = $_SESSION["quantity"];  

   setcookie($id."[id]", $id, time()+3600);
   setcookie($id."[Name]", $name, time()+3600);
   setcookie($id."[price]", $price, time()+3600);
   setcookie($id."[quantity]", $quantity, time()+3600);
}
header("Location:shoppingcart.php");

?>