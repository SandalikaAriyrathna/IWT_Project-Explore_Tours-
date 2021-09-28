<?php
include 'dbconnection.php';
$id = "";
if(isset($_GET['id'])){$id =$_GET['id']; }
$delQuery = "delete from events where id = ' ".$id."'";
$result = $conn->query($delQuery);
if($result===TRUE){  
    header("Location: UpcomingEventViewer.php?msg=Delete Success!");die();
}else{
    header("Location: UpcomingEventViewer.php?msg=Delete Error:".mysqli_error($conn));die();
}