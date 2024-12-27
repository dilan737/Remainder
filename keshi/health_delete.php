<?php

require 'health_config.php';

$userTitle=$_POST["title"];

$sql="DELETE FROM health WHERE title='$userTitle'";

if($con->query($sql))
{
	echo"<script>alert('Deleted');</script>";
}
else
{
	echo"<script>alert('Not Success');</script>";
}




?>



