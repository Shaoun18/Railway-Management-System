<?php

$host = "localhost";
$dbUser = "railway";
$dbPWD = "stamford";
$dbname = "railway database";

$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

if($connect == false){
    echo "<h2>Error connection_timeout</h2>";
}

$sql = "CREATE TABLE Days_available(  
Train_id int not null,
Available_days varchar(25),
primary key(Train_id),
foreign key(Train_id) references Train_class(Train_id) on update cascade on delete cascade
)";

if($connect->query($sql) === TRUE) {
    echo "Table Days_available created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect ->close();	

?>