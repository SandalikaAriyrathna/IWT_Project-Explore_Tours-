<?php
include 'dbconnection.php';
$username = "";
$password = "";
if(isset($_POST['username'])){$username=$_POST['username'];}
if(isset($_POST['password'])){$password=$_POST['password'];}
$selectUser  = "Select * from admin where username = '".$username."' ";
$result = $conn->query($selectUser);
if($row=$result->num_rows>0){
   echo 'User Found';
if($row=$result->fetch_assoc()){
  if($password==$row['password']){
  $_SESSION['username']=$row['username'];
  header("Location:AdminHome.php?msg=Welcome!");die();
}else{
  header("Location:AdminLogin.php?msg=Invalid User");die();  
}  
}   
}
?>