<?php
include 'dbconnection.php';
$query = "select * from activities";
$result = $conn->query($query);
?>
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
            background-image:url("img/isubg.jpeg");
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

         <div class="upevent clearfix" align="center">
            <table border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>

                            <form method="post" action="updatettd.php">
                            <tr>
                                
                                <td><?php  echo $row['id']; ?></td> 
                                <td><input type="text" name="title" value="<?php echo $row['title']; ?>" ></td>
                                <td><img src="<?php echo $row['image']; ?>" width="70"  height="70"></td>
                                <td><input type="text" name="description" value="<?php echo $row['description']; ?>" ></td>
                                <td><input type="hidden" name="id" value="<?php echo $row['id'];?>" /> 
                                <input type="submit" value="Update" /></td>
                                <td><a href="deletettd.php?id=<?php echo $row['id'];?>"><input type="submit" value="Delete" /></a></td>
                                </form>

        <?php
    }
                    }
$conn->close();
?>
                    </tbody>
            </table>
    </div><!--wrapper-->

<?php require_once('footer.php'); ?>
</body>
</html>