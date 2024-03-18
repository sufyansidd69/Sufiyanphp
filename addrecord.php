<?php 
#STEP 1
require "../Sufiyanphp/assets/config/dbc.php" ;

#STEP 2

$fName = $_POST['fName'];
$email = $_POST['email'];
$pass= $_POST['pass'];

#STEP 3
$sql= "INSERT into Account (fName, email, pass) 
VALUE('$fName', '$email', '$pass')";

mysqli_query($conn, $sql);


header("location:index.php");

?>