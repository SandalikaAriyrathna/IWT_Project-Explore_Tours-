<?php 
	include 'dbconnection.php';
session_start();

	$mail = "";
	$pass = "";


	if(isset($_POST['mail'])){
		$mail=$_POST['mail'];
	}
		if(isset($_POST['pass'])){
			$pass=$_POST['pass'];
		}
			$selectUser  = "Select * from user where mail = '$mail' ";

			$result = $conn->query($selectUser);

			if($row=$result->num_rows>0){
			   echo 'User Found';

					if($row=$result->fetch_assoc()){

					  if($pass == $row['pass']){

						  $_SESSION['Id']=$row['Id'];
						  header("Location:Home.php?msg=Welcome!");
						  die();

						}
						else{
				 	 		header("Location:signin.php?msg=Invalid");				
				 	 		die();  
					}  
			}   
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Explore Tours</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles-sandalika.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Merriweather:wght@300&display=swap" rel="stylesheet">

	<script src="js/login.js"></script>

	<script>
		
		document.write(Date());

	</script>

	<style >
	body{
	  background-image:url("img/signinbg.jpg");
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
	</style>
</head>
<body>
	<div class="wrapper">
				

				<?php require_once('header.php'); ?>

			<div class="sign">
				<h1>Login with your Email account </h1>

				<form method="POST" action="signin.php">
					
						<?php 
							if (isset($_GET['msg'])) {
								echo '<p class="error"> Invalid Username or Password</p>';
							}
					 ?>

					<h3>Email</h3>
					<input type="email" name="mail" class="log" placeholder="Email" required>
					<h3>Password</h3>
					<input type="password" name="pass" class="log" placeholder="Password" id="show" required>
					<input type="checkbox" class="checkbox"  onclick="change()">Show Password
					<button type="submit" name="submit">Log in</button>
				</form>
				<a href="fp.php">Forgot your password ?</a>
				
			</div><!-- sign -->

			
			<?php require_once('footer.php'); ?>
		
	</div><!--wrapper-->
</body>
</html>

