<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE Train_class(                            
Train_id int not null,
Fare_class int not null,
Seat_class int not null,
Fare_class2 int not null,
Seat_class2 int not null,
Fare_class3 int not null,
Seat_class3 int not null,
primary key(Train_id),
foreign key(Train_id) references Train(Train_id) on update cascade on delete cascade
)";

if($connect->query($sql) === TRUE) {
    echo "Table Train_class created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>