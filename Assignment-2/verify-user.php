<?php

// Getting username and hash the password using SHA-512
$username= $_POST['username'];
$password= hash('sha512',$_POST['password']);

// Including the database connection file
require'database.php';

$sqlTask= "SELECT user_id FROM userData WHERE username= '$username' AND password= '$password'";
$output= $dbConnection->query($sqlTask);

$tally= $output -> rowCount();

// Checking if there's exactly one user with the provided username and password
if($tally==1){
    require 'index.php';
    echo '<p>Let\'s Go!!!</p>';
    foreach($output as $row){
        
        session_start();
                // Storing the user_id in the session
        $_SESSION['user_id'] = $row['user_id'];

                // Redirecting to the login success page
        Header('Location:login-success.php');
    }
}
else{
    require 'index.php';
        // Showing an error message
    echo'<p>Oops! username or password may not be valid, Try Again.</p>';
    
}
// Closing the database connection
$dbConnection = null;

?>
