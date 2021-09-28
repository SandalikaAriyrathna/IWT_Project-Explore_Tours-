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
	  background-image:url("img/background1.jpg");
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
	</style>
</head>
<body>
	<div class="wrapper">
				
							
		<?php require_once('header.php'); ?>	
				
			
			</center>
			<div class="home">
					<h4>Mail Us</h4>
					<form action="mail.php" method="POST">
						<input  type="text" name="name" class="contact"  placeholder=" Your Name">
						<input  type="email" name="email" class="contact"  placeholder=" Your Email">
						<textarea  name="message" class="contact"  cols="30" rows="10" placeholder="Text Message Here" style="width: 360px; height: 130px;"></textarea>
						<button name="submit" type="submit" class="send">Send</button>
						
					</form>
			</div><!-- home -->

					
				<div class="map">
					<h1>Get In Touch</h1>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3960.782672133669!2d79.86627336409539!3d6.91656662038944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1620601048697!5m2!1sen!2slk" width="570" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	    				<a href="#"><img src="img/map.png" width="30px"><h5>31/9,wordplace,Colombo 07</h5></a>
						<a href="#"><img src="img/email.png"  width="30px"><h5>exploretours@gmail.com</h5></a>
						<a href="#"><img src="img/telephone.png"  width="30px"><h5>(+94)767926856</h5></a>
				</div><!-- map -->

		
				<div class="more">
					<img src="img/Whatsapp.png" width="30px"><h5>(+94)767926856</h5>
					<img src="img/facebook.png"  width="30px"><h5>www.facebook.com(Explore Tours)</h5>
				</div><!-- more -->
			
		
<?php require_once('footer.php'); ?>


	</div><!--wrapper-->
</body>
</html>

