<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$Email_id = mysqli_real_escape_string($connect, $_REQUEST['Email_id']);
$Password = mysqli_real_escape_string($connect, $_REQUEST['Password']);
$First_Name = mysqli_real_escape_string($connect, $_REQUEST['First_Name']);
$Last_Name = mysqli_real_escape_string($connect, $_REQUEST['Last_Name']);
$Gender = mysqli_real_escape_string($connect, $_REQUEST['Gender']);
$Age = mysqli_real_escape_string($connect, $_REQUEST['Age']);
$Phone_Number = mysqli_real_escape_string($connect, $_REQUEST['Phone_Number']);
$City = mysqli_real_escape_string($connect, $_REQUEST['City']);
$State= mysqli_real_escape_string($connect, $_REQUEST['State']);
$Security_Question = mysqli_real_escape_string($connect, $_REQUEST['Security_Question']);
$Security_Question_Answere = mysqli_real_escape_string($connect, $_REQUEST['Security_Question_Answere']);


// Attempt insert query execution
$sql = "INSERT INTO department (Email_id,Password,First_Name,Last_Name,Gender,Age,Phone_Number,City,State,Security_Question,Security_Question_Answere)
VALUES ('$Email_id', '$Password' , '$First_Name','$Last_Name','$Source_id','$Gender','$Age','$Phone_Number','$City','$State','$Security_Question','$Security_Question_Answere')";

if($connect->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

$connect ->close();	

?>