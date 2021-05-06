<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE  Train_Status(  
Train_id int not null,
Available_Date varchar(25)not null,
Booked_seat3 int null,
Waiting_seat3 int null,
Available_seat3 int null,
primary key(Train_id,Available_Date),
foreign key(Train_id) references Train(Train_id) on update cascade on delete cascade
)";

if($connect->query($sql) === TRUE) {
    echo "Table Train_Status_table created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>