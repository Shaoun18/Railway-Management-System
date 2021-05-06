<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE  Reservation(
    Train_id int not null,
    Available_Date varchar(25)not null,
    Email_id varchar(25)not null,
    Passenger_no varchar(25)not null,
    Reservation_Date text not null,
    Reservation_Status varchar(25),
    primary key(Train_id,Available_Date,Email_id,Passenger_no),
    foreign key(Train_id,Available_Date) references Train_Status(Train_id,Available_Date) on update cascade on delete cascade,
    foreign key(Email_id) references User_Account(Email_id) on update cascade on delete cascade
    )";

if($connect->query($sql) === TRUE) {
    echo "Table Reservation_table created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>