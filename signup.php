<?php require_once("Header.php");?>
	<br/>
	<br/>
	<form id="signupForm"  method = "POST" action="signup_core.php">
					<center>
					Enter your fname : <input type="text" value = "Mr / Ms" name="fname" placeholder="first name"><br/>
                    Enter your lname : <input type="text" name="lname" placeholder="last name"><br/>
                    Enter your Gender : 
                    <input name = "gender" type= "radio"/> Male
                    <input name = "gender" type= "radio"/> Female
                    <input name = "gender" type= "radio"/> Other
                    <br/>
                    Enter your Phone Number : <input type="text" value = "+880" placeholder="Phone Number"><br/>
                    Select your Country : <select>
                        <option>Select your Country</option>
                        <option selected = "selected">Bangladesh</option>
                        <option>India</option>
                        <option>United Kingdom</option>
                        <option>United Staties</option>
                        <option>China</option>
                        </select>   <br/>           
                    Enter your State : 
                    <select>
	                    <optgroup label = "Bangladesh Division">
	                    <option value =""> Dhaka</option>
	                    <option value =""> Chitagonj</option>
                        <option value =""> sylhet</option>
                        <option value =""> Joshor</option>
                        <option value =""> Rajshai</option>
                        </optgroup>
                        <optgroup label = "India Division">
                        <option value =""> Kolkata</option>
                        <option value =""> New Delhi</option>
                        <option value =""> Goa</option>
                        <option value =""> Tamil Nadu</option>
                        <option value =""> panjab</option>
                        </optgroup>
                        <optgroup label = "United Kingdom Division">
                        <option value =""> London</option>
                        <option value =""> Edinburgh</option>
                        <option value =""> Bath</option>
                        <option value =""> Glasgow</option>
                        </optgroup>
                        <optgroup label = "United States Division">
                        <option value =""> Califonia</option>
                        <option value =""> Florida</option>
                        <option value =""> Texas</option>
                        <option value =""> Hawali</option>
                        <option value =""> New York</option>
                        </optgroup>
                        <optgroup label = "China Division">
                        <option value =""> Hainan</option>
                        <option value =""> Zhejiang</option>
                        <option value =""> Jiangsu</option>
                        <option value =""> Sichuan</option>
                        <option value =""> Henan</option>
                        </optgroup>
                        </select>  <br/>   
					Enter your Nid : <input type="text" name="Nid" id = 'Nid' placeholder="Nid Number"> <br/>
					Enter your email : <input type="text" name="email" id = "email" placeholder="Useremail"> <br/>
					Enter your password : <input type="text" name="pwd" id = "pwd" placeholder="Password"> <br/>
                    Enter your Retype password : <input type="text" name="rpwd" id = "rpwd" placeholder="Password"> <br/>
                    Enter your Security Question : <input type="text"  placeholder="Security Question"> <br/>
                    Enter your Security Question Ans : <input type="text" placeholder="Security Question Ans"> <br/><br/><br/>
					<input type="submit" name="submitsignup" value="signup">
					</center>
	</form>
	<br/>
	<br/><center>

	<script>
    $(document).ready(function(){
        $("#signupForm").validate({
            rules: {

                Nid:{
                    required: true,
                    minlength: 10,
					maxlength: 18
                },

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

                Nid: 'Please provide a Nid Number',

                email: "Please enter a valid email address",

                pwd: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 8-18 characters long"
                },
                rpwd: {
                    required: "Please provide a password",
                    equalTo: "Please enter the same password as above"
                }
            }
        });
    });
</script>

	<b style = "color: green">
		<?php 
			if (isset($_REQUEST['Done_Signup'])) {

				echo $_REQUEST['Done_Signup'];
			}
		?>		
	</b>
	</center>
	<br/>
<?php require_once("Footer.php");?>