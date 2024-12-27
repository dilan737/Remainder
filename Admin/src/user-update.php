<?php
include 'connect.php';

$email = $_GET['updateid']; 

$sql = "SELECT * FROM `newsin` WHERE Email = '$email'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$firstname = $row['FirstName'];
$lastname = $row['LastName'];
$dateofbirth = $row['DateofBirth'];
$contactnumber = $row['ContactNumber'];
$address1 = $row['Addressline1'];
$address2 = $row['Addressline2'];
$city = $row['City'];
$postal = $row['Postal'];
$gender = $row['Gender'];
$country = $row['Country'];
$email = $row['Email'];
$password = $row['Password'];  

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $contactnumber = $_POST['contactnumber'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $sql = "UPDATE `newsin` SET 
            FirstName='$firstname', 
            LastName='$lastname', 
            DateofBirth='$dateofbirth', 
            ContactNumber='$contactnumber', 
            Addressline1='$address1', 
            Addressline2='$address2', 
            City='$city', 
            Postal='$postal', 
            Gender='$gender', 
            Country='$country', 
            Email='$email', 
            Password='$password'
            WHERE Email='$email'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>
                alert('Updated Successfully!');
                window.location.href = 'user-dis.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: Unable to update user.');
              </script>";
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body, html {
            width: 100%;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #E98074, #D83F87, #44318D);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            box-sizing: border-box;
        }
        .form-container h2 {
            text-align: center;
            color: #2A1B3D;
            margin-bottom: 30px;
            font-size: 28px;
            letter-spacing: 1px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            color: #44318D;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #A4B3B6;
            border-radius: 6px;
            font-size: 16px;
            color: #333;
            transition: all 0.3s ease;
        }
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #D83F87;
            box-shadow: 0 0 8px rgba(216, 63, 135, 0.2);
        }
        .form-group button {
            width: 100%;
            background-color: #44318D;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }
        .form-group button:hover {
            background-color: #2A1B3D;
        }
        @media (max-width: 600px) {
            .form-container {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Update User</h2>
    <form method="POST">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="Enter First Name" autocomplete="off" required value="<?php echo $firstname; ?>">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" autocomplete="off" required value="<?php echo $lastname; ?>">
        </div>
        <div class="form-group">
            <label for="dateofbirth">Date of Birth</label>
            <input type="date" id="dateofbirth" name="dateofbirth" required value="<?php echo $dateofbirth; ?>">
        </div>
        <div class="form-group">
            <label for="contactnumber">Contact Number</label>
            <input type="tel" id="contactnumber" name="contactnumber" placeholder="Enter Contact Number" required value="<?php echo $contactnumber; ?>">
        </div>
        <div class="form-group">
            <label for="address1">Address Line 1</label>
            <input type="text" id="address1" name="address1" placeholder="Enter Address Line 1" required value="<?php echo $address1; ?>">
        </div>
        <div class="form-group">
            <label for="address2">Address Line 2</label>
            <input type="text" id="address2" name="address2" placeholder="Enter Address Line 2" required value="<?php echo $address2; ?>">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Enter City" required value="<?php echo $city; ?>">
        </div>
        <div class="form-group">
            <label for="postal">Postal Code</label>
            <input type="text" id="postal" name="postal" placeholder="Enter Postal Code" required value="<?php echo $postal; ?>">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="Male" <?php if($gender == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if($gender == 'Female') echo 'selected'; ?>>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" placeholder="Enter Country" required value="<?php echo $country; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required autocomplete="off" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required value="<?php echo $password; ?>">
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Update</button>
        </div>
    </form>
</div>
</body>
</html>
