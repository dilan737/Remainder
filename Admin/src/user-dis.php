<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        body {
            background-color: #ffffff;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            margin: auto;
        }
        button {
            display: inline-block;
            padding: 10px 15px;
            color: #fff;
            background-color: #D83F87;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button a {
            text-decoration: none;
            color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 8px 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #44318D;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9e9e9;
        }
        .btn-primary {
            background-color: #E98074;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-primary a {
            color: white;
            text-decoration: none;
        }
        .btn-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="btn-container">
    <button type="submit"><a href="user-index.php">Add user</a></button>
</div>

<h2>Users Table</h2>

<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Contact</th>
            <th>Address 1</th>
            <th>Address 2</th>
            <th>City</th>
            <th>Postal</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Email</th>
            <th>Password</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM newsin";
    $result = mysqli_query($con, $sql);

    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $firstName = $row['FirstName'];
            $lastName = $row['LastName'];
            $dateofbirth = $row['DateofBirth'];
            $contact = $row['ContactNumber'];
            $address1 = $row['Addressline1'];
            $address2 = $row['Addressline2'];
            $city = $row['City'];
            $postal = $row['Postal'];
            $gender = $row['Gender'];
            $country = $row['Country'];
            $email = $row['Email'];
            $password = $row['Password'];

            echo '<tr>
                    <td>'.$firstName.'</td>
                    <td>'.$lastName.'</td>
                    <td>'.$dateofbirth.'</td>
                    <td>'.$contact.'</td>
                    <td>'.$address1.'</td>
                    <td>'.$address2.'</td>
                    <td>'.$city.'</td>
                    <td>'.$postal.'</td>
                    <td>'.$gender.'</td>
                    <td>'.$country.'</td>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>
                    <td>
                        <button class="btn-primary"><a href="user-update.php?updateid='.$email.'">Update</a></button>
                        <button class="btn-primary"><a href="user-delete.php?deleteid='.$email.'">Delete</a></button>
                    </td>
                </tr>';
        }
    }
    ?>
    </tbody>
</table>

<center><button><a href="admin.php">Back</a></button></center>

</body>
</html>
