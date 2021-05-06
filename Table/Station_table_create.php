<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE Station (
Station_id varchar(25) not null,
Station_name varchar(25),
Available_days varchar(25),
primary key(Station_id))";

if($connect->query($sql) === TRUE) {
    echo "Table Station created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>