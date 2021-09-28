<?php
include 'dbconnection.php';
$id = "";
if(isset($_GET['id'])){$id =$_GET['id']; }
$delQuery = "delete from activities where id = ' ".$id."'";
$result = $conn->query($delQuery);
if($result===TRUE){  
    header("Location: ttdViewer.php?msg=Delete Success!");die();
}else{
    header("Location: ttdViewer.php?msg=Delete Error:".mysqli_error($conn));die();
}