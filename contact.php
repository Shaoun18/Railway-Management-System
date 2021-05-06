<?php require_once("Header.php");?>

    <form  method = "POST" action="signup_core.php">
        <center>
	<p>
	<p><h3> Name : </h3></p>
	<textarea placeholder = "Enter your Name"  cols = "80" rows = "1"></textarea>
    </p>
    
    <p>
	<p><h3> Email : </h3></p>
	<textarea placeholder = "Enter your Email" cols = "80" rows = "1"></textarea>
	</p>

	<p>
	<p><h3> Comment Box : </h3></p>
	<textarea placeholder = "Enter your feedback" cols = "150" rows = "7"></textarea>
	</p>
    <input type="submit" name="submitsignup" value="submit">
        </center>
        <br/>
    </form>

<?php require_once("Footer.php");?>
