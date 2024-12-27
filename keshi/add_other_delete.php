<?php

require 'add_other_config.php';

$userTitle=$_POST["title"];

$sql="DELETE FROM addother WHERE title='$userTitle'";

if($con->query($sql))
{
	echo"<script>alert('Deleted');</script>";
}
else
{
	echo"<script>alert('Not Success');</script>";
}




?>



