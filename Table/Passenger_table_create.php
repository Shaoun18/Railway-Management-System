<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE Passenger(
Passenger_no varchar(25)not null,
Passenger_name varchar(25)not null,
Seat_number int not null,
Age int not null,
Gender varchar(10)not null,
Train_id int not null,
primary key(Passenger_no,Seat_number),
foreign key(Train_id) references Days_available(Train_id) on update cascade on delete cascade
)";

if($connect->query($sql) === TRUE) {
    echo "Table Passenger_table created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>