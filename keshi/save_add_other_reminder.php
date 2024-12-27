<?php

require 'add_other_config.php';

$userTitle=$_POST["title"];
$userDate=$_POST["date"];
$userTime=$_POST["time"];
$userDescription=$_POST["description"];

$sql="INSERT INTO addother VALUES('$userTitle','$userDate','$userTime','$userDescription')";

if($con->query($sql)){
	echo"<script>alert('Insert Successful');</script>";
}	
else{
	echo"Error".$con->error;
}

$con->close();

?>