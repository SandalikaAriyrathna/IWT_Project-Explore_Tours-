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

        <?php
        if(isset($_GET['msg'])){
        ?>
            <p style="color: red"><?php echo $_GET['msg'];?></p>    
        <?php
        }
        ?>

        <div class="upevent clearfix" align="center">
        <h1>Upcoming Events Adding</h1>     
        <br>
        <form method="post" enctype="multipart/form-data" action="ueaAction.php">
        <table border="0">
        <tr>
        <td>Name : </td>
        <td><input class="ad" type="text" name="name" value=""></td>
        </tr>    
        <tr>
        <td>Image : </td>
        <td><input class="ad" type="file" name="image" value=""></td>
        </tr>
        <tr>
        <td>Description : </td>
        <td><input class="ad" type="text" name="description" value=""></td>
        </tr>
       
        </table>
         <center>
             <input class="add"   type="submit" name="" value="Add">   
        
        </center>
        </form>  
        <a href="AdminHome.php"><input class="add"  type="submit" value="Admin" /></a>
    </div> <!-- adlog -->
    
    <?php require_once('footer.php'); ?>
        
        
        
    </div><!--wrapper-->
</body>
</html>