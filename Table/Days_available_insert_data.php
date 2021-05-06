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
$Available_days = mysqli_real_escape_string($connect, $_REQUEST['Available_days']);

// Attempt insert query execution
$sql = "INSERT INTO department (Train_id,Available_days)
VALUES ('$Train_name', '$Available_days')";

if($connect->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

$connect ->close();	

?>