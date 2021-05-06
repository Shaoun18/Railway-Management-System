<?php require_once("Header.php");?>
	<br/>
	<br/>
	<form type = "POST" action="password_core.php">
					<center>
					Enter your oldpassword : <input type="text" name="oldpassword" placeholder="oldpassword">
					Enter your newpassword : <input type="text" name="newpassword" placeholder="newpassword">
					Enter your confirmpassword : <input type="text" name="confirmpassword" placeholder="confirmpassword">
					<input type="submit" name="submitsignup" value="signup">
					</center>
	</form>
	<br/>
	<br/><center>
	<b style = "color: green">
		<?php 
			if (isset($_REQUEST['change_PWD'])) {

				echo $_REQUEST['change_PWD'];
			}elseif(isset($_REQUEST['dontmatch'])){
				echo $_REQUEST['dontmatch'];
			}
		?>		
	</b>
	</center>
	<br/>
<?php require_once("Footer.php");?>