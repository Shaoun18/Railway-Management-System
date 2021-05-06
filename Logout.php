<?php
	setcookie("currentUser","    ",time()-(86400*50));
	header("location: login.php");
?>