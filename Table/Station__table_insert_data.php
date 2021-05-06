<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$Station_id = mysqli_real_escape_string($connect, $_REQUEST['Station_id']);
$Station_name = mysqli_real_escape_string($connect, $_REQUEST['Station_name']);
$Available_days = mysqli_real_escape_string($connect, $_REQUEST['Available_days']);

$sql = "INSERT INTO station (Station_id,Station_name,Available_days) 
VALUES ('$Station_id','$Station_name','$Available_days')";

if($connect->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

$connect ->close();	

?>