<?php

session_start();
$connect=mysqli_connect("localhost","username","password","dbname" )
$query="SELECT * FROM tbl_product ORDER BY id ASC";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)>0)
{
while($row= mysqli_fetch_array($result))
{

}
}



?>
