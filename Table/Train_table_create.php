<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE Train (
Train_id int not null,
Train_name varchar(25) not null,
Train_type varchar(25)not null,
Source_stn varchar(25),
Destination_stn varchar(25),
Source_id varchar(25),
Destination_id varchar (25),
primary key(Train_id),
foreign key(Source_id) references Station(Station_id) on update cascade on delete cascade";

if($connect->query($sql) === TRUE) {
    echo "Table Train created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>