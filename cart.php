<?php

session_start();
$connect=mysqli_connect("localhost","UserName","password", "dbname");

$query="SELECT * FROM tbl_product ORDER BY id ASC";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
}


if(isset($_SESSION['user'])) {

  $_SESSION["Cart"]=new ShoppingCart();
}
$cart=$_SESSION["Cart"];
else {

}


?>
[]
