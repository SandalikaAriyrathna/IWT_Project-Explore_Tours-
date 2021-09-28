<?php

$username = "root";
$password = "";
$host = "127.0.0.1";
$database = "exploretours";
$port = "3306";

$conn = new mysqli($host,$username,$password,$database,$port);

if(!$conn->connect_errno){
  echo 'Connected Successfully';   
}else{
   echo 'Error : '.$conn->connect_error;
}

?>