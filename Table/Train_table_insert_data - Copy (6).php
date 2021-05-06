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
$Train_name = mysqli_real_escape_string($connect, $_REQUEST['Train_name']);
$Train_type = mysqli_real_escape_string($connect, $_REQUEST['Train_type']);
$Source_stn = mysqli_real_escape_string($connect, $_REQUEST['Source_stn']);
$Destination_stn = mysqli_real_escape_string($connect, $_REQUEST['Destination_stn']);
$Source_id = mysqli_real_escape_string($connect, $_REQUEST['Source_id']);
$Destination_id = mysqli_real_escape_string($connect, $_REQUEST['Destination_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO department (Train_id,Train_name,Train_type,Source_stn,Destination_stn,Source_id,Destination_id)
VALUES ('$Train_name', '$Train_type' , '$Source_stn','$Destination_stn','$Source_id','$Destination_id')";

if($connect->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

$connect ->close();	

?>