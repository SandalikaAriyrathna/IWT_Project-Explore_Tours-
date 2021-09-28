<?php
include 'dbconnection.php';
$Name="";
$description="";
$id="";
if(isset($_POST['Name'])){$Name = $_POST['Name'];}
if(isset($_POST['description'])){$description = $_POST['odate'];}
if(isset($_POST['id'])){$id = $_POST['id'];}
$Query= "update events set Name ='".$Name."',description='".$description."' WHERE id = '".$id."' "; 
$result = $conn->query($Query);
if($result===TRUE){  
    header("Location: UpcomingEventViewer.php?msg=Update Success!");die();
}else{
    header("Location: UpcomingEventViewer.php?msg=Update Error:".mysqli_error($conn));die();
}

