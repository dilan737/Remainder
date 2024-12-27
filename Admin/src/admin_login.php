<?php
// Connect to the database
include 'connect.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    // Fetch admin details from the database
    $sql = "SELECT * FROM admin WHERE  Email= '$username' AND Password = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        header('Location: admin.php');
        exit();
    } else {
        header('Location: admin_login.php?error=Invalid Username or Password');
        exit();
    }
}
?>
