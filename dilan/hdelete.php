<?php
// Include database connection file
include 'config.php';

// Check if the delete id is set in the URL
if (isset($_GET['deleteid'])) {

    // Get the delete ID from the URL
    $id = $_GET['deleteid'];

    // Prepare the DELETE SQL statement
    $sql = "DELETE FROM hobbies WHERE id=$id";

    // Execute the DELETE query
    $result = mysqli_query($con, $sql);

    // Check if the deletion was successful
    if ($result) {
        // Redirect to display.php after successful deletion
        header('location:hread.php');
    } else {
        // Display error message if the query failed
        die(mysqli_error($con));
    }
}
?>
