<html>
<head>

<link rel="stylesheet" href="css.css">

</head>
<body>
<?php

require 'connect.php';

$paymentMethod = $_POST['pmethod'];
$cardNumber = $_POST['cardNumber'];
$cardName = $_POST['cardName'];
$expiryDate = $_POST['expiryDate'];
$ccv = $_POST['ccv'];
$city = $_POST['city'];
$contactNumber = $_POST['contactNumber'];
$country = $_POST['country'];

$sql="INSERT INTO pay VALUES ('$paymentMethod','$cardNumber','$cardName','$expiryDate','$ccv','$city','$contactNumber','$country')";

 if($con->query($sql))
 {
    header("Location:read.php");
    exit;
 }
 else
 {
    echo "error".$con->error;
 }


?>



</body>
</html>






