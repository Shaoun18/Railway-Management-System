<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$Train_id = mysqli_real_escape_string($connect, $_REQUEST['Train_id']);
$Fare_class = mysqli_real_escape_string($connect, $_REQUEST['Fare_class']);
$Seat_class = mysqli_real_escape_string($connect, $_REQUEST['Seat_class']);
$Fare_class2 = mysqli_real_escape_string($connect, $_REQUEST['Fare_class2']);
$Seat_class2 = mysqli_real_escape_string($connect, $_REQUEST['Seat_class2']);
$Fare_class3 = mysqli_real_escape_string($connect, $_REQUEST['Fare_class3']);
$Seat_class3 = mysqli_real_escape_string($connect, $_REQUEST['Seat_class3']);
 
// Attempt insert query execution
$sql = "INSERT INTO department (Train_id,Fare_class,Seat_class,Fare_class2,Seat_class2,Fare_class3,Seat_class3)
VALUES ('$Train_id', '$Fare_class' , '$Seat_class','$Fare_class2','$Seat_class2','$Fare_class3','$Seat_class3')";

if($connect->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

$connect ->close();	

?>