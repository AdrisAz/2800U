<?php

session_start();
$connect=mysqli_connect("localhost","password", "dbname");

$query="SELECT * FROM tbl_product ORDER BY id ASC";
$result=mysqli_query($connect,$query);

if(isset($_SESSION['user'])) {

  $_SESSION["Cart"]=new ShoppingCart();
}
$cart=$_SESSION["Cart"];
else {

}


?>
[]
