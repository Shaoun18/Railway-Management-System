<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE Train_Route(
Train_id int not null,
Stop_number int not null,
Station_id varchar(25) not null,
Arrival_time text not null,
Departure_time text not null,
Source_distance int not null,
primary key(Train_id,Stop_number,Station_id),
foreign key(Train_id) references Train(Train_id) on update cascade on delete cascade
)";

if($connect->query($sql) === TRUE) {
    echo "Table Train_Route created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>