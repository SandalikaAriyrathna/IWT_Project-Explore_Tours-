<?php
include 'dbconnection.php';
$query = "select * from user";
$result = $conn->query($query);
?>


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
	<div class="wrappers">
				

				<?php require_once('header.php'); ?>

			<div class="signin">


				<h1>User Detail</h1>

				<table border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>E-Mail</th>
                        <th>Full Name</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                	
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                    
                
                    
                            <tr>
                                
                                <td><?php echo $row['id']; ?></td>
                                <td><input type="text" name="" value="<?php echo $row['mail']; ?>"></td>
                                <td><input type="text" name="" value="<?php echo $row['ful']; ?>" ></td>
                                <td><input type="text" name="" value="<?php echo $row['pass']; ?>" ></td>


                                
                                
                                
                                

        <?php
    }
                    }
$conn->close();
?>
                    </tbody>
            </table>
				
			</div><!-- sign -->

			
			<?php require_once('footer.php'); ?>
		
	</div><!--wrapper-->
</body>
</html>
