<?php
$con=new mysqli("localhost","root","","housedb");

if($con->connect_error)
{
    die("not conect".$con-> connect_error);
}



?>