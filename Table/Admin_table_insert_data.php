<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$User_id = mysqli_real_escape_string($connect, $_REQUEST['User_id']);
$Password = mysqli_real_escape_string($connect, $_REQUEST['Password']);
$Train_id = mysqli_real_escape_string($connect, $_REQUEST['Train_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO department (User_id,Password,Train_id)
VALUES ('$User_id', '$Password' , '$Train_id')";

if($connect->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

$connect ->close();	

?>