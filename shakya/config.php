<?php

$con=new mysqli("localhost","root","","housedb");

if($con->connect_error)
{
    die("Connection Field".$con->connect_error);
}
?>