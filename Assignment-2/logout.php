<?php

// Starting or resuming an existing session
session_start();

// Clearing all session variables
session_unset();

// Destroying the session
session_destroy();

// Redirecting to the login page (index.php)
header('location:index.php');

?>