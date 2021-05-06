<?php
	require_once("Conection.php");	
	$getcurrentuser = $_COOKIE["currentUser"];
	$oldpassword = htmlentities($_REQUEST["oldpassword"]);
	$newpassword = htmlentities($_REQUEST["newpassword"]);
	$confirmpassword = htmlentities($_REQUEST["confirmpassword"]);
	$checkpassword = "select * my_users Where token_name = '$getcurrentuser'";
	$runquery = mysqli_query($connect,$checkpassword);
	if ($runquery == true) {
		echo mysqli_num_rows($runquery);
		if(mysqli_num_rows($runquery == 1)){

			while ($getcurrentuserData = mysqli_fetch_array($runquery)){
				 $useremail = $getcurrentuserData['email'];
			}
		}
	}
	
	$getcurrentAuth = md5(sha1($useremail.$oldpassword));
	if ($getcurrentAuth == $getcurrentuser  &&  $newpassword == $confirmpassword ){

		$newpassword = md5(sha1($confirmpassword));
		$newauth = md5(sha1($useremail.$newpassword));

		$UserInputPassword = "update my_users set password = '$newpassword' && token_name == '$newauth'";
		$runupquery = mysqli_query($connect,$UserInputPassword);
		if ($runupquery == true) {
					setcookie("currentUser","",time()-(86400*50));
					setcookie("currentUser",$newauth,time()+(86400*7));
		header("location: password.php?change_PWD=Password Changed!");
		}
	}else{
		header("location: password.php?dontmatch=Password did not match");
	}
?>