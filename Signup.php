<?php

$link = mysqli_connect("localhost", "root", "admin", "OFM");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// calls input names from html(index.html)
$username = mysqli_real_escape_string($link, $_REQUEST['Uname']);
$password = mysqli_real_escape_string($link, $_REQUEST['pass']);
$firstname = mysqli_real_escape_string($link, $_REQUEST['Fname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['Lname']);

// Attempt insert query execution
if($username===""||$username==="NULL"||$password===""||$password==="NULL"||$firstname===""||$firstname==="NULL"||$lastname===""||$lastname==="NULL"){
  //Didn't Figure this out
$alert= "A First Name, Last Name, UserName, and Password must be entered, Try again";
echo "<script type='text/javascript'>alert('$alert');</script>";


exit();

}else{
$sql = "INSERT INTO users(Uname, pass, Fname, Lname) VALUES ('$username', '$password', '$firstname', '$lastname');";
}
if(mysqli_query($link, $sql)){

    header("Location:Login.html");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
