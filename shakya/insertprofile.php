<html>
<head>

<link rel="stylesheet" href="css.css">

</head>
<body>
<?php

require 'config.php';

$fname =$_POST["first-name"];
$lname =$_POST["last-name"];
$email =$_POST["email"];
$pass =$_POST["password"];
$phone =$_POST["phone-number"];
$redday =$_POST["registered-date"];
$gend =$_POST["gender"];
$DOB =$_POST["dob"];
$aline1 =$_POST["address-line1"];
$aline2 =$_POST["address-line2"];
$city =$_POST["city"];

$sql="INSERT INTO sin1 VALUES ('$fname','$lname ','$email','$pass ','$phone','$redday','$gend ','$DOB','$aline1','$aline2','$city ')";

 if($con->query($sql))
 {
    header("Location:readprofile.php");
    exit;
 }
 else
 {
    echo "error".$con->error;
 }

 ?>



</body>
</html>