<html>
<head>
    <link rel="stylesheet" href="read.css">
</head>    
<body> 



<?php

require 'connect.php';

$cardNumber = $_POST['cardNumber'];

$sql="DELETE FROM pay
WHERE cardNumber='$cardNumber' ";

if($con->query($sql))
{
    

          header('location:read.php');
    exit;
}
else
{
    echo "Not success";
}

?>

</body>
</html>