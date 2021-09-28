<!DOCTYPE html>
<html>
<head>
	<title>Explore Tours</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles_mokshika.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

	<style>
    body{
      background-image:url("img/background123.jpeg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
}
  </style>

</head>
<body>
	<script src="js/main.js"></script>
	<div class="wrapper">

		<?php require_once('header.php'); ?>
			
			</center>
		 	<div class="maincontent">
		 		<div class="header">
		 			<h3>Register for an Account</h3>
		 		</div>
		 		<div class="main">
<form method="POST" action="caAction.php">
		 				<span>
		 					<i class="fas fa-user"></i><!-- fullname icon -->
		 					<input type="text" placeholder="Full name" name="ful" id="fullname">
		 				</span><br>
		 				<span>
		 					<i class="fas fa-envelope"></i><!--email icon-->
		 					<input type="text" placeholder="Email" name="mail" id="email">
		 				</span><br>
		 				<span>
		 					<i class="fas fa-key"></i><!--password icon-->
		 					<input type="password" placeholder="Password" name="pass" id="password1">
		 				</span><br>
		 				
		 					<input type="submit" name="submit" class="button" value="Sign Up" >
		 			</form>
		 		</div>
		 	</div>
		 		
		<?php require_once('footer.php'); ?>

	</div><!--wrapper-->
</body>
</html>