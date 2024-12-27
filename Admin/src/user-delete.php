<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $email = $_GET['deleteid']; 

   
    $sql="DELETE FROM newsin WHERE email='$email' "; 
    
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        echo "<script>
                alert('Deleted successfully!');
                window.location.href = 'user-dis.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Error: Unable to delete admin.');
              </script>";
        die(mysqli_error($con)); 
    }
    // require 'connect.php';

    // $Email = $_POST['email'];

    // $sql="DELETE FROM newsin
    // WHERE email='$Email' ";

}
?>
