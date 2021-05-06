<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE User_Account(
Email_id varchar(25)not null,
Password varchar(36)not null,
First_Name varchar(25)not null,
Last_Name varchar(25)not null,
Gender varchar(10)not null,
Age int not null,
Phone_Number varchar(18)not null,
City varchar(25)not null,
State varchar(25)not null,
Security_Question varchar(50)not null,
Security_Question_Answere varchar(25)not null,
primary key(Email_id)
)";

if($connect->query($sql) === TRUE) {
    echo "Table User_Account created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>