<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "OFM";

//Create a connection
$conn = mysqli_connect($servername,$username,$password,$dbname);



//check connection
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}
if(isset($_POST['Uname'])){
	$username=$_POST['Uname'];
	$password=$_POST['pass'];
}


$sql="SELECT * FROM users WHERE Uname='".$username."' AND pass='".$password."' LIMIT 1";
$res=mysqli_query($conn,$sql);


if(mysqli_num_rows($res)==1){
   header("Location:welcome.html");
	exit();
}
else{
	header("location:Error.html");
	exit();
}

?>
