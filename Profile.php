<?php
	if(!isset($_COOKIE["currentUser"])){
		header("location: Index.php");
		}
?>
	<?php require_once("Header.php");?>
	<div id = "cs">
		<p>
			<h2><?php
						if(isset($_COOKIE["currentUser"])){

							$currentUsertarget = $_COOKIE["currentUser"];

							$nameQuery = "select * from  my_users where token_name= '$currentUsertarget'";
							$runnameQuery = mysqli_query($connect,$nameQuery);
							if($runnameQuery==true){
								while($getquery = mysqli_fetch_array($runnameQuery)){
									echo $getquery['fname'].' '.$getquery['lname'];
									$avatorimg = $getquery['avator'];
									echo "<img src = 'C:/Users/Engr. Shaoun/Pictures/Picture/Shaoun Chandra Shill.jpg' alt = ''>";
 								}
							}

						}
				?>
			</h2>
			Welcome, I am Shaoun Chandra Shill. I am from Bangladesh, a small sovereign eternal beautiful country.
			I was brought up in Faridganj,Chandpur,Bangladesh.I have spend my childhood in the midst of greenery, in a remote village.I have moved to sylhet city in 2005 for my higher education.I live in sylhet city for 12 years duration time(2005 – 2017).I completed my SSC in sylhet govt pilot high school in 2014.I completed my HSC in M.C College,sylhet in 2016.Then I have moved to my capital city(Dhaka,Bangladesh) in 2018 for my bachelor degree.
			I am now study in Stamford University Bangladesh in Bachelor of Science (B.Sc.) degree in Computer Science & Engineering.I want to be a software Engineer and now I am working for my personal project. 
			I have learned to play guitar myself without anyone help.it is a tough job for most people.
			I am well known for my presentation skill.I am speak very well both in Bangla and English.Another quality of me I feel proud of is-I am a quick learner and self-motivated person.
			I like to work in a competitive friendly environment where has the opportunity of the unison of independent mind. I wish to apply my knowledge to solve the meaningful problems for the betterment of human lives.To get my Full CV Please click here. 
		</p>
		<b><a style = 'color: green' href = "password.php" alt ="">Change password</a></b><br/><br/>
		<?php require_once("Footer.php");?>
	</div>