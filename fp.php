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

			<div class="signin">
				<h1>Forgot Password </h1>

				<form method="POST" action="fpAction.php">

					<?php 
						if (isset($errors) && !empty($errors)) {
							echo '<p class="error"> Invalid Username or Password</p>';
						}
					 ?>

					 <h3>Email</h3>
					<input type="email" name="mail" class="log" placeholder="Email" required>
					<h3>Full Name</h3>
					<input type="text" name="ful" class="log" placeholder="Full name">
					<h3>Enter new password</h3>
					<input type="password" name="pass" class="log" placeholder="Type new password" id="show" required>
					<h3>Re enter password</h3>
					<input type="password" name="" class="log" placeholder="Confirm password" id="show" required>
					<input type="checkbox" class="checkbox"  onclick="change()">Show Password
					<button type="submit" name="submit">Reset</button>
				</form>
				
			</div><!-- sign -->

			
			<?php require_once('footer.php'); ?>
		
	</div><!--wrapper-->
</body>
</html>