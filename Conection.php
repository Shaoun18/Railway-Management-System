<?php 

// connection create 

	$host = "localhost";
	$dbUser = "railway";
	$dbPWD = "stamford";
	$dbname = "railway database";

	$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

	if($connect == false){
		echo "<h2>Error connection_timeout</h2>";
	}else{
	   // echo  "<h2>Your Connection Created Succesfully </h2>";
    }

	

?>