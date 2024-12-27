<?php

require 'add_other_config.php';

$userTitle=$_POST["title"];
$userDate=$_POST["date"];
$userTime=$_POST["time"];
$userDescription=$_POST["description"];

if(empty($userTitle)||empty($userDate)||empty($userTime)||empty($userDescription))
{
	echo"<script>alert('All Required');</script>";
}
else
{
	$sql="UPDATE addother set title='$userTitle',date='$userDate',time='$userTime',description='$userDescription' WHERE title='$userTitle' ";
	
	if($con->query($sql))
	{
		echo"<script>alert('Updated');</script>";
	}
	else{
		echo"<script>alert('Not Updated');</script>";
	}
}












?>

















