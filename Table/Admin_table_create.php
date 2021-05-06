<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE Admin(
User_id varchar(25)not null,
Password varchar(36)not null,
Train_id int not null,
primary key(User_id),
foreign key(Train_id) references Train(Train_id) on update cascade on delete cascade
)";

if($connect->query($sql) === TRUE) {
    echo "Table Admin created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>