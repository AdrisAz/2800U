<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
                 /*(server name,username,password,database name)

                 */
$link = mysqli_connect("localhost", "root", "admin", "OFM");
include 'CSS/Index.css';
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// calls input names from html(index.html)
$username = mysqli_real_escape_string($link, $_REQUEST['Uname']);
$password = mysqli_real_escape_string($link, $_REQUEST['pass']);


// Attempt insert query execution
$sql = "INSERT INTO users(Username, Password) VALUES ('$username', '$password');";
if(mysqli_query($link, $sql)){

    header("Location:Login.html");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
