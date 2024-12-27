<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
    // JavaScript confirmation box for delete
    echo "<script>
            var confirmDeletion = confirm('Are you sure you want to delete this admin?');
            if (confirmDeletion) {
                window.location.href = 'delete.php?confirmdeleteid={$id}';
            } else {
                window.location.href = 'Display.php';
            }
          </script>";
}

if(isset($_GET['confirmdeleteid'])){
    $id=$_GET['confirmdeleteid'];

    $sql="DELETE FROM admin WHERE id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "<script>
                alert('Deleted successfully!');
                window.location.href = 'Display.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Error: Unable to delete admin.');
              </script>";
        die(mysqli_error($con));
    }
}
?>