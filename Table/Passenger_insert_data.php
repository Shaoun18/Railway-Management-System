<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$Passenger_no = mysqli_real_escape_string($connect, $_REQUEST['Passenger_no']);
$Passenger_name = mysqli_real_escape_string($connect, $_REQUEST['Passenger_name']);
$Seat_number = mysqli_real_escape_string($connect, $_REQUEST['Seat_number']);
$Age = mysqli_real_escape_string($connect, $_REQUEST['Age']);
$Gender = mysqli_real_escape_string($connect, $_REQUEST['Gender']);
$Train_id = mysqli_real_escape_string($connect, $_REQUEST['Train_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO department (Passenger_no,Passenger_name,Seat_number,Age,Gender,Train_id)
VALUES ('$Passenger_no', '$Passenger_name' , '$Seat_number','$Age','$Gender','$Train_id')";

if($connect->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

$connect ->close();	

?>