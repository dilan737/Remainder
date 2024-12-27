<html>
<head>
    
</head>    
<body> 



<?php

require 'config.php';

$email =$_POST["email"];

$sql="DELETE FROM sin1
WHERE email='$email' ";

if($con->query($sql))
{
    echo "Deleted";
    header("Location:readprofile.php");
    exit;
}
else
{
    echo "Not success";
}

?>

</body>
</html>