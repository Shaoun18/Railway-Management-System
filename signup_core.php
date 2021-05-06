<?php
	require_once("Conection.php");	

	$UserInputfname = htmlentities($_REQUEST["fname"]);
	$UserInputlname = htmlentities($_REQUEST["lname"]);
	$UserInputEmail = htmlentities($_REQUEST["Username"]);
	$UserInputPassword = htmlentities($_REQUEST["Password"]);
	$encryptepwd = md5(sha1($UserInputPassword));
	$encrytoken = md5(sha1($UserInputEmail.$UserInputPassword));

	$insertsignup = "insert into user_account(fname,lname,email,Password,token_name) 
	values 
	('$UserInputfname','$UserInputlname','$UserInputEmail','$encryptepwd','$encrytoken')";

	$runquery = mysqli_query($connect,$insertsignup);
	if ($runquery==true) {
		header("location:signup.php?Done_Signup=Registation Succesful!!");
	}

?>