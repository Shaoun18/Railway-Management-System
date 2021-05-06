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
$Source_id = mysqli_real_escape_string($connect, $_REQUEST['Source_id']);
$Destination_stn = mysqli_real_escape_string($connect, $_REQUEST['Destination_stn']);
$Class_type = mysqli_real_escape_string($connect, $_REQUEST['Class_type']);
$Reservation_status = mysqli_real_escape_string($connect, $_REQUEST['Reservation_status']);
$Train_id = mysqli_real_escape_string($connect, $_REQUEST['Train_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO department (Passenger_no,Source_id,Destination_stn,Class_type,Reservation_status,Train_id)
VALUES ('$Passenger_no', '$Source_id' , '$Destination_stn','$Class_type','$Reservation_status','$Train_id')";

if($connect->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

$connect ->close();	

?>