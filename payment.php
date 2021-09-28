<?php 
	include 'dbconnection.php'; 

	session_start();



	$data="";
	if (!isset($_SESSION['Id'])) {
		header("Location:signin.php");
	}
	
	$id = $_SESSION['Id'];

	
	$query = "SELECT u.Id,u.ful, v.type, v.vpay FROM user u, vehicle v WHERE v.Id=u.Id AND u.Id=$id";

	$sql = mysqli_query($conn, $query);

	if (mysqli_num_rows($sql)>0) {
		while($row = mysqli_fetch_assoc($sql)){
			$data .="<tr>";
			$data .="<td>{$row['Id']} </td>";
			$data .="<td>{$row['ful']} </td>";
			$data .="<td>{$row['type']} </td>";
			$data .="<td>{$row['vpay']} </td>";
			$data .="</tr>";
		}
	}


	$hdata="";
	$query1 = "SELECT u.Id,u.ful, h.hotel,h.hbudget FROM user u, hotel h WHERE u.Id=h.Id  AND u.Id='$id'";

	$sql1 = mysqli_query($conn, $query1);

	if (mysqli_num_rows($sql1)>0) {
		while($row = mysqli_fetch_assoc($sql1)){
			$hdata .="<tr>";
			$hdata .="<td>{$row['Id']} </td>";
			$hdata .="<td>{$row['ful']} </td>";
			$hdata .="<td>{$row['hotel']} </td>";
			$hdata .="<td>{$row['hbudget']} </td>";
			$hdata .="</tr>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Explore Tours</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles-prathibha.css">

<?php require_once('footer.php'); ?>
		
		
		
	</div><!--wrapper-->
</body>

</html>
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

<br>
<h2>Vehicle Payment</h2>

		<table border="2">
 		<tr>
 			<th>ID</th>
 			<th>Name</th>
 			<th>Vehicle</th>
 			<th>Budget of Vehicle</th>

 			

 		</tr>
 		<?php echo "{$data}"; ?>
 	</table>
<br>
<h2>Hotel Payments</h2>
 	<table border="2">
 		<tr>
 			<th>ID</th>
 			<th>Name</th>
 			<th>Hotel</th>
 			<th>Budget of Hotel</th>

 			

 		</tr>
 		<?php echo "{$hdata}"; ?>
 	</table>



<?php require_once('footer.php'); ?>
		
		
		
	</div><!--wrapper-->
</body>
</html>