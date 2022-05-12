<?php
	$servername = "localhost";
	$username = "root";
	$password = null;
	$db = "booking";

	// Create connection
	$mysqli = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($mysqli->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	
	
?>