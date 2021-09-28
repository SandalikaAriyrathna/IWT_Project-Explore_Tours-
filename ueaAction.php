<?php
include 'dbconnection.php';
$name ="";
$image ="";
$description ="";
If(isset($_POST['name'])){$name = $_POST['name'];}
If(isset($_POST['description'])){$description = $_POST['description'];}
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $uploadOk = 0;
}
if ($uploadOk==0) {
     header("Location: UpcomingEventsAdding.php?msg=Sorry, only JPG, JPEG, PNG & GIF files are allowed.");  
     die();
} else {
move_uploaded_file($_FILES["image"]['tmp_name'], $target_file);
}
$Query  = "Insert into events(name, image, description)values('".$name."', '".$target_file."', '".$description."')";
         
            $result = $conn->query($Query);
                if ($result===TRUE) {

     header("Location: UpcomingEventsAdding.php?msg=Save Success !"); 
         die(); 
                }else{
 header("Location: UpcomingEventsAdding.php?msg=Save Error".mysqli_error($conn)); 
         die(); 

}
?>