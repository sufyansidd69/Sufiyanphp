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
$Grade= $_post['Grade'];
#TOTal
$tot= $CS+$OOP+$DSA+$CP;
#persentage
$per=$tot*100/400;
# Grade calculation
if ($per >= 90) { 
$Grade = 'A+';
} elseif ($per >= 80) {
    $Grade = 'A';
} elseif ($per >= 70) {
    $Grade = 'B';
} elseif ($per >= 60) {
    $Grade = 'C';
} elseif ($per >= 50) {
    $Grade = 'D';
} else {
    $Grade = 'F';
}

// Output the grade
echo "Total Marks: $tot<br>";
echo "Percentage: $per%<br>";
echo "Grade:$Grade";

#STEP 3
$sql= "INSERT into Account (fName, email, CS, OOP, DSA, CP, Total,per,Grade) 
VALUE('$fName', '$email', '$CS', '$OOP', '$DSA','$CP', '$tot','$per','$Grade' )";

mysqli_query($conn, $sql);


header("location:index.php");

?>