<?php
include 'dbconnection.php';	
$name="";
$email="";
$message="";
if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['message'])){$message = $_POST['message'];}
$Query  = "Insert into messages(name,email,message)values('".$name."', '".$email."', '".$message."')";
$result = $conn->query($Query);
                if ($result===TRUE){

     header("Location: contactus.php?msg=Suggestion save Success !"); 
         die(); 
                }else{
 header("Location: contactus.php?msg=Suggestion save Error".mysqli_error($conn)); 
         die(); 

}
?>