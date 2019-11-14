<script type="text/javascript">
  var x=0;
function ClementinesINC(){

  x++;
  echo Clementines(x)
}

</script>


<?php
$servername = "localhost";
$username = "root";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";

$sql = "CREATE TABLE food (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Clementines INT(100),
Apples INT(100),
Bananas INT(100),
Broccoli INT(100),
Lettuce INT(100),
Eggplant INT(100),
Cake INT(100),
Cheese INT(100),
Chocolate INT(100),
Fritter INT(100),
Brownies INT(100),
Donuts INT(100),
Steak INT(100),
Chicken INT(100),
Pork INT(100),
Salmon INT(100),
Duck INT(100),
Lobster INT(100),
)";

function Clementines($x){
  $Clementines = $x;
  echo $Clementines;

}

$sql = "INSERT INTO users(FirstName, LastName, Username, Password, EmailAddress) VALUES ('$Fname','$Lname','$username', '$password', '$eamil');";

if(mysqli_query($link, $sql)){
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
