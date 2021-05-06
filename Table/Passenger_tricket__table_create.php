<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE  Passenger_tricket(                     
Passenger_no varchar(25)not null,
Source_id varchar(25),
Destination_stn varchar(25),
Class_type varchar(15)not null,
Reservation_status varchar(15)not null,
Train_id int not null,
primary key(Passenger_no),
foreign key(Train_id) references Days_available(Train_id) on update cascade on delete cascade
)";

if($connect->query($sql) === TRUE) {
    echo "Table Passenger_tricket created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>