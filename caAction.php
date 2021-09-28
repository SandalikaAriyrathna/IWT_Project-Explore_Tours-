<?php
        include 'dbconnection.php';	
    

    if (isset($_POST['submit'])) {
        $ful = $_POST['ful'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
     }

$Query  = "INSERT INTO user(ful,mail,pass)VALUES('$ful', '$mail', '$pass')";

$results = $conn->query($Query);
               
             if($results){  
        header("Location: signin.php");die();
                        
            }
            else{
                header("Location: create_account.php?msg=Error".mysqli_error($conn)); 
                 die(); 

}

?>