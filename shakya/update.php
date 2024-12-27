<?php
require 'config.php';

$fname =$_POST["first-name"];
$lname =$_POST["last-name"];
$email =$_POST["email"];
$pass =$_POST["password"];
$phone =$_POST["phone-number"];
$redday =$_POST["registered-date"];
$gend =$_POST["gender"];
$DOB =$_POST["dob"];
$aline1 =$_POST["address-line1"];
$aline2 =$_POST["address-line2"];
$city =$_POST["city"];


if(
    empty($fname) ||
    empty($lname) ||
    empty($email) ||
    empty($pass) ||
    empty($phone) ||
    empty($redday) ||
    empty($gend) ||
    empty($DOB) ||
    empty($aline1) ||
    empty($aline2) ||
    empty($city)
    )
    {
        echo "All Required";
    }
    else
    {
        $sql=
        "UPDATE sin1
         SET 
        fname='$fname',
        lname='$lname',
        email='$email',
        password='$pass',
        phone='$phone',
        rdate='$redday',
        gender='$gend',
        dob='$DOB',
        aline1='$aline1',
        aline2='$aline2',
        city='$city'
         WHERE email='$email'
         ";

         if($con->query($sql))
         {
            echo "Updated";
            header("Location:http:readprofile.php");
            exit;
    exit;
         }
         else
         {
            echo "not updated";
         }
    }
   


?>