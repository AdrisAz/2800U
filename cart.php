<?php

include_once("ShoppingCart.class.php");
session_start();

if(isset($_SESSION['user'])) {

  $_SESSION["Cart"]=new ShoppingCart();
}
$cart=$_SESSION["Cart"];
else {

}


?>
[]
