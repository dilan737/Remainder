<?php

require 'finance_config.php';

$userCategory=$_POST["category"];
$userTitle=$_POST["title"];
$userDate=$_POST["date"];
$userTime=$_POST["time"];
$userDescription=$_POST["description"];

if(empty($userCategory)||empty($userTitle)||empty($userDate)||empty($userTime)||empty($userDescription))
{
	echo"<script>alert('All Required');</script>";
}
else
{
	$sql="UPDATE finance set type='$userCategory',title='$userTitle',date='$userDate',time='$userTime',description='$userDescription' WHERE title='$userTitle' ";
	
	if($con->query($sql))
	{
		echo"<script>alert('Updated');</script>";
	}
	else{
		echo"<script>alert('Not Updated');</script>";
	}
}












?>

















