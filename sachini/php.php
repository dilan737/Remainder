<?php

require 'connect.php';

$Fname = $_POST['first_name'];
$Lname = $_POST['last_name'];
$DOB= $_POST['dob'];
$phone = $_POST['phone'];
$line1 = $_POST['line1'];
$line2 = $_POST['line2'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$Gender = $_POST['gender'];
$cont = $_POST['country'];
$Email = $_POST['email'];
$password = $_POST['password'];


$sql="INSERT INTO newsin VALUES ('$Fname','$Lname','$DOB','$phone','$line1','$line2','$city ','$postal','$Gender','$cont','$Email','$password')";
if($con->query($sql))
 {
    header("Location:read1.php");
    exit;
 }
 else
 {
    echo "error".$con->error;
 }

 
 
 


?>
























