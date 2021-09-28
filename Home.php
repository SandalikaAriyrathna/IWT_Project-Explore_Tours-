<!DOCTYPE html>
<html>
<head>
	<title>Explore Tours</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles-prathibha.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Merriweather:wght@300&display=swap" rel="stylesheet">
	<style>
		body{
			background-image:url("img/sim1.jpg");
			background-color: #fff;
			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: cover;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		
			<?php require_once('header.php'); ?>
	
			<div class="SearchDestination">
			<label>Choose a destination</label>
			 <form method="post">
				<select name="destination">
					<option value="Rathnapura">Rathnapura</option>
					<option value="Anuradhapura">Anuradhapura</option>
					<option value="Polonnaruwa">Polonnaruwa</option>
					<option value="Kandy">Kandy</option>
					<option value="Nuwara Eliya">Nuwara Eliya</option>
					<option value="Trincomalee">Trincomalee</option>
					<option value="Colombo">Colombo</option>
					<option value="Matara">Matara</option>
					<option value="Galle">Galle</option>
					<option value="Jaffna ">Jaffna</option>
				</select>
				<input type="submit" name="submit">
			</form>
			<?php
if(isset($_POST['submit'])){
           $destination = $_POST['destination'] ;
           if($destination=="Rathnapura"){

        echo "Maha Saman Devalaya<br>Maha Saman Devalaya or the Great Saman Temple is a shrine dedicated to deity Saman, situated at Ratnapura, Sri Lanka who is the presiding deity of the Sri Pada Mountain which is also called Samanthakuta ".$destination;
       }if($destination=="Colombo"){
       	echo "Gangarama temple<br>Gangaramaya Temple is one of the most important temples in Colombo, Sri Lanka, being a mix of modern architecture and cultural essence. Located on the Beira Lake, it was completed in the late 19th century. ".$destination;
       }if($destination=="Anuradhapura"){
       echo "Jaya Sri Maha Bodhi<br>Jaya Sri Maha Bodhi is a sacred fig tree in the Mahamewna Gardens, Anuradhapura, Sri Lanka. It is said to be the southern branch from the historical Sri Maha Bodhi at Buddha Gaya in India under which Buddha attained Enlightenment.".$destination;	
       }if($destination=="Polonnaruwa"){
       	echo "The Gal Vihara<br>The Gal Vihara, also known as Gal Viharaya and originally as the Uttararama, is a rock temple of the Buddha situated in the ancient city of Polonnaruwa in North Central Province, Sri Lanka. ".$destination;
       }
       if($destination=="Kandy"){
       	echo "Temple of the Sacred Tooth Relic<br>Temple of the Sacred Tooth Relic; commonly known as the ශ්‍රී දළදා මාළිගාව, is a Buddhist temple in Kandy, Sri Lanka. It is located in the royal palace complex of the former Kingdom of Kandy, which houses the relic of the tooth of the Buddha. ".$destination;
       }if($destination=="Nuwara Eliya"){
       	echo "Nuwara Eliya<br>Nuwara Eliya is a city in the tea country hills of central Sri Lanka. The naturally landscaped Hakgala Botanical Gardens displays roses and tree ferns, and shelters monkeys and blue magpies.  ".$destination;
       }


       }

?>


			
		</div><!--search destination-->
			

		<div class="title">
			<h2>Top Destinations</h2>
			<h3>Start planning your travels here with the latest deals for popular destinations</h3>
		</div><!--title-->
 

		<center>
		<div class="table">
			<table>
				<tr>
					<td><div class="content">
							<div class="images">
								<a target="_blank" href="img/Colombo.jpg">
									<img src="img/Colombo.jpg" alt="Colombo" width="200">
								</a>
							<div class="description"><mark>Colombo</mark></div><!--description-->
							</div><!--images-->
						</div><!--content--></td>
					<td>
						<div class="content">
							<div class="images">
								<a target="_blank" href="img/Kandy.jpg">
									<img src="img/Kandy.jpeg" alt="Kandy" width="200">
								</a>
							<div class="description"><mark>Kandy</mark></div><!--description-->
							</div><!--images-->
						</div><!--content-->
					</td>
					<td>
						<div class="content">
							<div class="images">
								<a target="_blank" href="img/Nuwara-Eliya.jpg">
									<img src="img/Nuwara-Eliya.jpg" alt="Nuwara Eliya" width="200">
								</a>
							<div class="description"><mark>Nuwara Eliya</mark></div><!--description-->
							</div><!--images-->
						</div><!--content-->
					</td>
					<td>
						<div class="content">
							<div class="images">
								<a target="_blank" href="img/Galle.jpg">
									<img src="img/Galle.jpg" alt="Galle" width="200">
								</a>
							<div class="description"><mark>Galle</mark></div><!--description-->
							</div><!--images-->
						</div><!--content-->
					</td>
				</tr>
				<tr>
					<td>
						<div class="content">
							<div class="images">
								<a target="_blank" href="img/Hikkaduwa-beach.jpg">
									<img src="img/Hikkaduwa-beach.jpg" alt="Hikkaduwa Beach" width="200">
								</a>
							<div class="description"><mark>Hikkaduwa beach</mark></div><!--description-->
							</div><!--images-->
						</div><!--content-->
					</td>
					<td>
						<div class="content">
							<div class="images">
								<a target="_blank" href="img/galleface-green.jpg">
									<img src="img/galleface-green.jpg" alt="Galleface Green" width="200">
								</a>
							<div class="description"><mark>Galleface Green</mark></div><!--description-->
							</div><!--images-->
						</div><!--content-->
					</td>
					<td>
						<div class="content">
							<div class="images">
								<a target="_blank" href="img/Yala.jpg">
									<img src="img/Yala.jpg" alt="Yala National Park" width="200">
								</a>
							<div class="description"><mark>Yala National Park</mark></div><!--description-->
							</div><!--images-->
						</div><!--content-->
					</td>
					<td>
						<div class="content">
							<div class="images">
								<a target="_blank" href="img/Anuradhapura.jpg">
									<img src="img/Anuradhapura.jpg" alt="Anuradhapura" width="200">
								</a>
							<div class="description"><mark>Anuradhapura</mark></div><!--description-->
							</div><!--images-->
						</div><!--content-->
					</td>
				</tr>
			</table>
		</div>
		</center>
		

<?php require_once('footer.php'); ?>
		
		
		
	</div><!--wrapper-->
</body>
</html>