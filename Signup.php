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
$sql = "INSERT INTO users(Uname, pass, Fname, Lname) VALUES ('$username', '$password', '$firstname', '$lastname');";
if(mysqli_query($link, $sql)){

    header("Location:Login.html");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
