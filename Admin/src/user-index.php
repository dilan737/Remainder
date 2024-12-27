<?php
    include 'connect.php'; 

    if (isset($_POST['submit'])) {  
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $dateofbirth = $_POST['dob'];
        $contact = $_POST['contact'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $postal = $_POST['postal'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        $sql = "INSERT INTO newsin (FirstName, LastName, DateofBirth, ContactNumber, Addressline1, Addressline2, City, Postal, Gender, Country, Email, Password) 
                VALUES ('$firstName', '$lastName', '$dateofbirth', '$contact', '$address1', '$address2', '$city', '$postal', '$gender', '$country', '$email', '$password')";

        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "<script>
                    alert('User added successfully!');
                    window.location.href = 'user-dis.php';
                  </script>";
            exit;
        } else {
            echo "<script>
                    alert('Error: Unable to add user.');
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
    <title>Add User</title>
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
            overflow-y: auto;
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
            color: #666;
            background:none;
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
    <h2>Add User</h2>
    <form method="POST">
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter First Name" autocomplete="off" required maxlength="50">
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter Last Name" required autocomplete="off" maxlength="50">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="text" id="contact" name="contact" placeholder="Enter Contact Number" required autocomplete="off" maxlength="15">
        </div>
        <div class="form-group">
            <label for="address1">Address Line 1</label>
            <input type="text" id="address1" name="address1" placeholder="Enter Address Line 1" required autocomplete="off" maxlength="100">
        </div>
        <div class="form-group">
            <label for="address2">Address Line 2</label>
            <input type="text" id="address2" name="address2" placeholder="Enter Address Line 2" required autocomplete="off" maxlength="100">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Enter City" required autocomplete="off" maxlength="50">
        </div>
        <div class="form-group">
            <label for="postal">Postal</label>
            <input type="text" id="postal" name="postal" placeholder="Enter Postal Code" required autocomplete="off" maxlength="10">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" placeholder="Enter Country" required autocomplete="off" maxlength="50">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required autocomplete="off" maxlength="100">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required autocomplete="off" maxlength="255">
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Add User</button>
        </div>
    </form>
</div>
</body>
</html>
