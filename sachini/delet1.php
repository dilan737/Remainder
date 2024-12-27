<html>
<head>
    <link rel="stylesheet" href="read.css">
</head>    
<body> 

<?php

require 'connect.php';

$Email = $_POST['email'];

$sql="DELETE FROM newsin
WHERE email='$Email' ";

if($con->query($sql))
{
    header("Location:read1.php");
    exit;
 
}
else
{
    echo "Not success";
}
$con->close();

?>

</body>
</html>