<?php
require 'connect.php';


$Fname = $_POST['first_name'];
$Lname = $_POST['last_name'];
$DOB = $_POST['dob'];
$phone = $_POST['phone'];
$line1 = $_POST['line1'];
$line2 = $_POST['line2'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$Gender = $_POST['gender'];
$cont = $_POST['country'];
$Email = $_POST['email'];
$password = $_POST['password'];

// Check if any required fields are empty
if (
    empty($Fname) ||
    empty($Lname) ||
    empty($DOB) ||
    empty($phone) ||
    empty($line1) ||
    empty($line2) ||
    empty($city) ||
    empty($postal) ||
    empty($Gender) ||
    empty($cont) ||
    empty($Email) ||
    empty($password)
) 

{
    echo "All fields are required";
      } else 
    
      

    $sql = "
        UPDATE newsin
        SET 
            FirstName='$Fname',
            LastName='$Lname',
            DateofBirth='$DOB',
            ContactNumber='$phone',
            Addressline1='$line1',
            Addressline2='$line2',
            City='$city',
            Postal='$postal',
            Gender='$Gender',
            Country='$cont',
            Email='$Email',
            Password='$password'
        WHERE Email='$Email'
    ";

    // Execute the query and check for success
    if ($con->query($sql) === TRUE) {
        
        header("Location:read1.php");
        exit;
     }
    else {
        
        echo "Error updating record: " . $con->error;
    }



$con->close();
?>
