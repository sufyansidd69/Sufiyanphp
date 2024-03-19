<?php 
#STEP 1
require "../Sufiyanphp/assets/config/dbc.php" ;

#STEP 2

$fName = $_POST['fName'];
$email = $_POST['email'];
$CS= $_POST['CS'];
$OOP= $_POST['OOP'];
$DSA= $_POST['DSA'];
$CP= $_POST['CP'];
#TOTal
$tot= $CS+$OOP+$DSA+$CP;
#persentage
$per=$tot*100/400;




#STEP 3
$sql= "INSERT into Account (fName, email, CS, OOP, DSA, CP, Total,per) 
VALUE('$fName', '$email', '$CS', '$OOP', '$DSA','$CP', '$tot','$per' )";

mysqli_query($conn, $sql);


header("location:index.php");

?>