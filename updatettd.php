<?php
include 'dbconnection.php';
$title="";
$description="";
$id="";
if(isset($_POST['title'])){$title = $_POST['title'];}
if(isset($_POST['description'])){$description = $_POST['description'];}
if(isset($_POST['id'])){$id = $_POST['id'];}
$Query= "update activities set title ='".$title."',description='".$description."' WHERE id = '".$id."' "; 
$result = $conn->query($Query);
if($result===TRUE){  
    header("Location: ttdViewer.php?msg=Update Success!");die();
}else{
    header("Location: ttdViewer.php?msg=Update Error:".mysqli_error($conn));die();
}
