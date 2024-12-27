<?php
require 'connect.php';

$paymentmethod = $_POST['pmethod'];
$cardNumber = $_POST['cardNumber'];
$cardName = $_POST['cardName'];
$expiryDate = $_POST['expiryDate'];
$ccv = $_POST['ccv'];
$city = $_POST['city'];
$contactNumber = $_POST['contactNumber'];
$country = $_POST['country'];

if(
    empty($paymentmethod) ||
    empty($cardNumber) ||
    empty($cardName) ||
    empty($expiryDate) ||
    empty($ccv) ||
    empty($city) ||
    empty($contactNumber) ||
    empty($country)
    )
    {
        echo "All Required";
    }
    else
    {
        $sql=
        "UPDATE pay
         SET 
         Paymentmethode='$paymentmethod',
         cardNumber='$cardNumber',
         cardName='$cardName',
         expiryDate='$expiryDate',
         ccv='$ccv',
         city='$city',
         contactNumber='$contactNumber',
         country='$country'
         WHERE cardNumber='$cardNumber'
         ";

         if($con->query($sql))
         {

            
             header("Location:http://localhost/Sachini%20final/read.php");
             exit;
   
         }
         else
         {
            echo "not updated";
         }
    }
   


?>