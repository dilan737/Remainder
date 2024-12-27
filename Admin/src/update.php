<?php
include 'connect.php';

$id = $_GET['updateid']; 


$sql = "SELECT * FROM `admin` WHERE ID = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


$id= $row['ID'];
$name = $row['Name'];
$email = $row['Email'];
$mobile = $row['Mobile'];
$password = $row['Password'];

if (isset($_POST['submit'])) {
    $id = $_POST['adminId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    $sql = "UPDATE `admin` SET ID='$id',Name='$name', Email='$email', Mobile='$mobile', Password='$password' WHERE ID='$id'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>
                    alert('Updated Successfully!');
                    window.location.href = 'Display.php';
            </script>";
    } else {
        echo "<script>
                alert('Error: Unable to update admin.');
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
    <title>Update Admin</title>
    <link rel="icon" type="image/x-icon" href="image/favicon/favicon.ico">
    <link rel="icon" type="image/x-icon" href="image/favicon/favicon-16x16.png" >
    <link rel="icon" type="image/x-icon" href="image/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="image/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="image/favicon/apple-touch-icon.png" sizes="180x180">
    <link rel="stylesheet" href="style/body_header_footer.css">


    <style>
        body, html {
            height: 100%;
            width: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.2);
        }
        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            box-sizing: border-box;
        }
        .form-container h2 {
            text-align: center;
            color: #2A1B3D;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 5px;
        }
        .form-group label {
            display: block;
            color: #44318D;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #A4B3B6;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }
        .form-group input:focus {
            outline: none;
            border-color: #D83F87;
        }
        .form-group button {
            width: 100%;
            background-color: #E98074;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-group button:hover {
            background-color: #D83F87;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Update Admin</h2>
    <form method="POST">
    <div class="form-group">
            <label for="name">ID</label>
            <input type="text" id="adminId" name="adminId" placeholder="Enter Name" autocomplete="off" required value="<?php echo $id; ?>">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Name" autocomplete="off" required value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required autocomplete="off" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="tel" id="mobile" name="mobile" placeholder="Enter Mobile Number" required autocomplete="off" value="<?php echo $mobile; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required autocomplete="off" value="<?php echo $password; ?>">
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Update</button>
        </div>
    </form>
</div>
</body>
</html>
