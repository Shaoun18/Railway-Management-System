<?php
	session_start();
	require_once("Conection.php");
	if(isset($_COOKIE["currentUser"])){
		$currentUseri = $_COOKIE["currentUser"];
		$currentauth = "select * from  my_users where token_name = '$currentUseri'";
		$runupquery = mysqli_query($connect,$currentauth);
		/*if (mysql_num_rows($runupquery) == 0) {
			setcookie("currentUser","",time()-(86400*50));
			header("location: login.php");
		}*/
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Page Create with php  </title>
	<link rel="stylesheet" href= "login.css" type="text/css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>

	
</head>
<body>
<header id = "head">
	<h2> 
		<center>Welcome to Railway Database Management <br/>
		
		<?php
			if(!isset($_COOKIE["currentUser"])){
			echo  '<a href="signup.php">signup</a>';
		}
		?>

		<a href="Index.php">Home</a>

		<?php
			if(isset($_COOKIE["currentUser"])){
			echo  '<a href="Profile.php">Profile</a>';
		}
		?>
		
		<?php
			if(!isset($_COOKIE["currentUser"])){
			echo  '<a href="login.php">Login</a>';
		}else{
			echo  '<a href="Logout.php">LogOut</a>';
		}
		?>

		</center>
	</h2>
</header>