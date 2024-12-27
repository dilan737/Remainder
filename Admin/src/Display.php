<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Table</title>
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
            padding: 5px;
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
            padding: 2px;
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
    </style>
</head>
<body>
<div class="btn-container">
    <button type="submit"><a href="index.php">Add Administrator</a></button>
</div>
<h2>Admin Table</h2>

<table>
    <tbody>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Password</th>
            <th>Oparator</td>
        </tr>
    </thead>
    <?php
    $sql="select* from admin";
    $result=mysqli_query($con,$sql);

    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['ID'];
            $name = $row['Name'];
            $email = $row['Email'];
            $mobile = $row['Mobile'];
            $password = $row['Password'];
            
            echo '<tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn-primary"><a href="update.php?updateid='.$id.'">Update</a></button>
            <button class="btn-primary"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
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
