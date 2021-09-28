<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'unawatuna-hotel'; 

	$connection = mysqli_connect('localhost', 'root', '', 'unawatuna-hotel');

	// Checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
	}

?>