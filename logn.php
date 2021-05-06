<?php
	if(isset($_COOKIE["currentUser"])){
		//header("location: Profile.php");
		}
?>

	<div id = "cs">
	
	<?php require_once("Header.php");?>	

		<div id = "content">
			<h1 id ="Logi">Login From</h1>
			<div id = "loginBoxes">
				<center>
				
				<form id="signupForm" method = "POST" action="login.php">
					<input type="text" name="email" id = 'email' placeholder="Username"><br/><br/>
					<input type="text" name="pwd" id = 'pwd' placeholder="Password"><br/><br/>
					<input type="submit" name="loginBTN"  value="login"><br/><br/>
					<?php
						if(isset($_REQUEST["wrong_info"])){

							echo '<b style = "color : red">Username or Password Incorrect.</b>';
						}
					?>
				</form>

				<script>
    				$(document).ready(function(){
       				 $("#signupForm").validate({
            	rules: {

                email: {
                    required: true,
                    email: true
                },

                pwd: {
                    required: true,
                    minlength: 8,
					maxlength: 18
                },
                rpwd: {
                    required: true,
                    
                    equalTo: "#pwd"
                }
            },
            messages: {

				email: "Please enter a valid email address",

                pwd: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 8-18 characters long"
                },
            }
        });
    });
</script>

				</center>
			</div>			
		</div>
	
		<?php require_once("Footer.php");?>
		</div>