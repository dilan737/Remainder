<?php
require 'connect.php';

// Get email and password from the form submission
$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to check if the user exists with the provided credentials
$sql = "SELECT * FROM newsin WHERE Email = '$email' AND Password = '$password'";
$result = $con->query($sql);

// If a match is found, redirect to the reminder page
if ($result->num_rows > 0) {
    header("Location:../keshi/index.php");

} else {
    // If login fails, display an alert box
    echo "<script type='text/javascript'>
            alert('Incorrect email or password. Please try again.');
            window.location.href = 'login1.html'; // Redirect back to login page after alert
          </script>";
}

// Close the database connection
$con->close();
?>
