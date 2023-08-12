<?php
// Trying to establish a database connection
try {
	// Creating a PDO database connection with the specified parameters
	$dbConnection = new PDO('mysql:host=172.31.22.43;dbname=Akshit200535888', 'Akshit200535888', 'g_pZ8DoO9K');
	// Set PDO error mode to exception
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	// If a connection error occurs, displaying an error message
	echo "Failed to Connect, error message: " . $e->getMessage();

}

?>