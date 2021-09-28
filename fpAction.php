<?php
    include 'dbconnection.php';
    $mail="";
    $ful="";
    $pass="";
  
     if(isset($_POST['ful'])){
        $ful = $_POST['ful'];
    }

    if(isset($_POST['mail'])){
        $mail = $_POST['mail'];
    }
   
    if(isset($_POST['pass'])){
        $pass = $_POST['pass'];
    }
    $query = "Select * from user where mail = '".$mail."' ";
    $result = $conn->query($query);

    $Query= "update user set ful='".$ful."',mail ='".$mail."',pass='".$pass."' WHERE mail = '".$mail."' "; 
    $result = $conn->query($Query);

    if($result===TRUE){  
        header("Location: Home.php?msg=Success!");die();
    }else{
        header("Location: fp.php?msg=Error:".mysqli_error($conn));die();
    }