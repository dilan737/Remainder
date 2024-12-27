<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RemindMate-User Profile</title>
    <link rel="icon" type="image/x-icon" href="../image/favicon/favicon.ico">
    <link rel="icon" type="image/x-icon" href="../image/favicon/favicon-16x16.png" >
    <link rel="icon" type="image/x-icon" href="../image/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="../image/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="../src/image/favicon/apple-touch-icon.png" sizes="180x180">
    <link rel="stylesheet" href="profile.css">
</head>    
<body>    
<header>
        <div class="nav-container">
            <div class="logo">
                <a href="#">
                    <img src="Logo.png" alt="Remindmate Logo" width="100px" height="100px">
                </a>
            </div>
            <h1 id="brand-name">REMINDMATE</h1>
            <div class="nav-buttons">

                <a href="profile.html">
                    <img src="profile_pic.png" alt="Description of image" width="60px" height="60px">
                </a>
            </div> 
        </div>
        <div class="nav-bar">
        <a href="../home/rhome.html">Home</a>|
            <a href="../keshi/index.php">Reminder</a>
            <a href="../shakya/rcontact.html">contact</a>|
            <a href="../shakya/rabout.html">About Us</a>
        </div>
    </header>

<?php

require 'config.php'; //set connection



//sql query for read
$sql=   "SELECT 
            fname,
            lname,
            email,
            password,
            phone,
            rdate,
            gender,
             dob,
             aline1,
             aline2,
             city
        FROM sin1";

$result=$con->query($sql);

//num_rows ---> find how many results in entire $result
if($result->num_rows>0)
{
    echo"<table border='1'>";
    echo"<thead>";
    echo"<tr>";
    echo 
    "<th>First Name</th>".
    "<th>Last Name</th>".
    "<th>Email</th>".
    "<th>Password</th>".
    "<th>Phone Number)</th>".
    "<th>Registered Date</th>".
    "<th>Gender</th>".
    "<th>DOB</th>".
    "<th>Address</th>".
    "<th>Address L2</th>".
    "<th>City</th>";
    echo"</thead>";
    echo"</tr>";

    //to get one by one rows in $result
   
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
         echo "<td>".$row["fname"]."</td> ".
         "<td>".$row["lname"]."</td>".
         "<td>".$row["email"]."</td> ".
         "<td>".$row["password"]."</td> ".
         "<td>".$row["phone"]."</td> ".
         "<td>".$row["rdate"]."</td> ".
        "<td>".$row["gender"]."</td> ".
        "<td>".$row["dob"]."</td> ".
        "<td>".$row["aline1"]."</td> ".
         "<td>".$row["aline2"]."</td> ".
         "<td>".$row["city"]."</td> ";
         echo "</tr>";
    }

    echo"</table>";
}
else
{
    echo "No Results";
}





$con->close();


?>

<form method="post" action="proupdatelist.php">


    <button>Update</button>

</form>

<form method="post" action="prodeletelist.php">


    <button style>Delete</button>

</form>
</body>
</html>