<?php
include 'dbconnection.php'; 
$selected_val = $_POST['rating'];
if (isset($_GET['rating'])){$selected_val =$_GET['rating']; }
$query = "select * from hotel where rating = '".$selected_val."' ";
$result = $conn->query($query);
if ($result===TRUE) {
header("Location: book_a_hotel.php?msg=Success !"); 
         die();
    }else{
header("Location: book_a_hotel.php?msg=Error".mysqli_error($conn)); 
         die();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rating Viewer</title>
    </head>
    <body>
        <div align="center">
            <table border="0">
                <thead>
                    <tr>
                        <th>Name : </th>
                        <th>Location : </th>
                        <th>Rating : </th>
                        <th>Budget : </th>
                        <th>Guest : </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                
                                <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                                <td><input type="text" name="location" value="<?php echo $row['location']; ?>"></td>
                                <td><input type="text" name="rating" value="<?php echo $row['rating']; ?>" ></td>
                                <td><input type="text" name="budget" value="<?php echo $row['budget']; ?>" ></td>
                                <td><input type="text" name="guest" value="<?php echo $row['guest']; ?>" ></td>

        <?php
    }
                    }
$conn->close();
?>
                    </tbody>
            </table>
        </div>
    </body>
</html>
?>