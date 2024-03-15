<?php
#step 1 connect data into DataBase
 define("DB_HOST", 'localhost');
 define("DB_USER", 'root');
 define("DB_PASSWORD", '');
 define("DB_NAME", 'githubphp');

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

 if (!$conn) {
    echo "Unable to connect" . mysqli_error();
} 
#step 2 Insert Data Into User Table 
$name= $_POST["fName"];
$CS= $_POST["CS"];
$OOP= $_POST["OOP"];
$DSA= $_POST["DSA"];
$CP= $_POST["CP"];


#step 3 Collect Data Into From
$sql="INSERT into result (fName, CS, OOP, DSA, CP) 
Values('$name','$CS','$OOP', '$DSA', '$CP' )"; 

mysqli_query($conn,$sql);

#step 4 Redirect To Page
header("location:index.php");


?>
