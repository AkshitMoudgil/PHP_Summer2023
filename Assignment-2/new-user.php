<?php

// Including the database connection file
require 'database.php';

// Get user input from the signup form
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$username = $_POST['new-username'];
$password = $_POST['new-password'];
$confirm = $_POST['confirm-password'];

// Variable to track form data validity
$validity = true;
require 'index.php';

// Checking if the first name is empty
if (empty($first_name)) {
    echo '<p> First name is required</p>';
    $validity = false;
}

// Checking if the last name is empty
if (empty($last_name)) {
    echo '<p> Last name is required</p>';
    $validity = false;
}

// Checking if the username is empty
if (empty($username)) {
    echo '<p> Username is required</p>';
    $validity = false;
}

// Checking if the password is empty or doesn't match the confirmation
if ((empty($password)) || ($password != $confirm)) {
    echo '<p>Invalid Password</p>';
    $validity = false;
}

// If form data is valid, checking if the username already exists in the database
if ($validity) {
    $stmt = $dbConnection->prepare("SELECT COUNT(*) FROM userData WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    // If the username already exists, showing an error message
    if ($count > 0) {
        echo '<p>Username already exists. Please choose a different username.</p>';
        $validity = false;
    }
}

// If form data is valid and username is available, inserting the user data into the database
if ($validity) {
    $password = hash('sha512', $password);
    $sqlTask = "INSERT INTO userData (first_name, last_name, username, password) VALUES 
	('$first_name', '$last_name', '$username', '$password');";
    $dbConnection->exec($sqlTask);
    echo '<p>Thanks for joining. Now you may Login!</p>';

    // Closing the database connection
    $dbConnection = null;
}
?>