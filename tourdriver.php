
<?php
include 'dbconnection.php';
$query = "select * from tourdriver";
$result = $conn->query($query);

?>




<!doctype html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/styles-shashika.css">

<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Merriweather:wght@300&display=swap" rel="stylesheet">

    <style >
		body{
	  background-image:url("img/background123.jpeg");
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
	</style>

</head>
<body>
	<?php require_once('header.php'); ?>

<!--nav bar-->
<div class="con">

    <strong class="des">Choose destination:</strong> 
    <select name="destination" id="dest">
		<option value="Rathnapura">Rathnapura</option>
		<option value="Anuradhapura">Anuradhapura</option>
		<option value="Polonnaruwa">Polonnaruwa</option>
		<option value="Kandy">Kandy</option>
		<option value="Nuwara Eliya">Nuwara Eliya</option>
		<option value="Trincomalee">Trincomalee</option>
		<option value="Colombo">Colombo</option>
		<option value="Matara">Matara</option>
    </select>
   

   <form method="post" action="ratingact.php">
    <strong>No Of Days:</strong> <input  type="number"  name="numofdays"  min="1" max="30">
   
  <!--ratings-->
   <select name="rating" id="rate">
		<option value="5 stars">5 stars</option>
		<option value="4 stars">4 stars</option>
		<option value="3 stars">3 stars</option>
		<option value="2 stars">2 stars</option>
		<option value="1 stars">1 stars</option>
   </select>
   <!--DATE-->
  <input type="date" id="date1" name="bday">
  <input  type="submit" id="submitbtn" value="Submit">
</form>  

<form method="post" action="expact.php">
  	<!--experience-->	
   <select name="exp" id="exp">
		<option value="5 years">5 years</option>
		<option value="4 years">4 years</option>
		<option value="3 years">3 years</option>
		<option value="2 years">2 years</option>
		<option value="1 years">1 years</option>
   </select>
  </form>
</div>




<!--guide profiles-->
<div class="card">
	<img src="img/dr1.jpg" alt="profile" width="50%" class="cardimg">
	<div class="text">
		<?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        	?>
	<h2>>Name : <?php echo $row['dname']; ?></h2>
	<h3>Cost : <?php echo $row['dcost']; ?></h3>
	<h3>experience : <?php echo $row['exp']; ?></h3>
	<h4>Rating : <?php echo $row['rating']; ?></h4>
	<p><button>select</button></p>
	</div>
</div>

<div class="card">
	<img src="img/dr2.jpg" alt="profile" width="50%" class="cardimg">
	<div class="text">
		<?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        	?>
	<h2>Name : <?php echo $row['dname']; ?></h2>
	<h3>Cost : <?php echo $row['dcost']; ?></h3>
	<h3>experience : <?php echo $row['exp']; ?></h3>
	<h4>Rating : <?php echo $row['rating']; ?></h4>
	<p><button>select</button></p>
	</div>
</div>

<div class="card">
	<img src="img/dr3.jpg" alt="profile" width="50%" class="cardimg">
	<div class="text">
		<?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        	?>
	<h2>Name : <?php echo $row['dname']; ?></h2>
	<h3>Cost : <?php echo $row['dcost']; ?></h3>
	<h3>experience : <?php echo $row['exp']; ?></h3>
	<h4>Rating : <?php echo $row['rating']; ?></h4>
	<p><button>select</button></p>
	</div>
</div>

<div class="card">
	<img src="img/dr4.jpg" alt="profile" width="50%" class="cardimg">
	<div class="text">
		<?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        	?>
	<h2>Name : <?php echo $row['dname']; ?></h2>
	<h3>Cost : <?php echo $row['dcost']; ?></h3>
	<h3>experience : <?php echo $row['exp']; ?></h3>
	<h4>Rating : <?php echo $row['rating']; ?></h4>
	<p><button>select</button></p>
	</div>
</div>

<div class="card">
	<img src="img/dr5.jpg" alt="profile" width="50%" class="cardimg">
	<div class="text">
		<?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        	?>
	<h2>Name : <?php echo $row['dname']; ?></h2>
	<h3>Cost : <?php echo $row['dcost']; ?></h3>
	<h3>experience : <?php echo $row['exp']; ?></h3>
	<h4>Rating : <?php echo $row['rating']; ?></h4>
	<p><button>select</button></p>
	</div>
</div>

<div class="card">
	<img src="img/dr6.jpg" alt="profile" width="50%" class="cardimg">
	<div class="text">
		<?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        	?>
	<h2>Name : <?php echo $row['dname']; ?></h2>
	<h3>Cost : <?php echo $row['dcost']; ?></h3>
	<h3>experience : <?php echo $row['exp']; ?></h3>
	<h4>Rating : <?php echo $row['rating']; ?></h4>
	<p><button>select</button></p>
	</div>
</div>

<?php
    }}}}}}
                    }}}}}}
$conn->close();
?>

<?php require_once('footer.php'); ?>


</body>
</html>