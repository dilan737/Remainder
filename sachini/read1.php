<html>
<head>
    <link rel="stylesheet" href="css.css">
</head>    
<body>    


<?php

require 'connect.php'; //set connection


$sql="SELECT FirstName,
             LastName,
             DateofBirth,
             ContactNumber,
             Addressline1,
             Addressline2,
             City,
             Postal,
             Gender,
             Country,
             Email,
             Password 
             FROM newsin";

 $result= $con->query($sql);
 
 if($result->num_rows>0)

{
   
    echo"<table class='content-table'>";
   
    echo"<thead>";
    echo"<tr>";
    echo 
    "<th>First Name</th>".
    "<th>Last Name </th>".
    "<th>Date of Birth day </th>".
    "<th>Contact Number </th>".
    "<th> Addres line 1</th>".
    "<th>Addres line 2</th>".
    "<th>City</th>".
    "<th>Postal</th>".
    "<th>Gender</th>".
    "<th>Country</th>".
     "<th>Email</th>".
    "<th>Password</th>";
   
    echo"</thead>";
    echo"</tr>";

     
     while($row=$result->fetch_assoc())
     {
         echo "<tr>";
         echo "<td>".$row["FirstName"]."</td> "."<td>".$row["LastName"]."</td>"."<td>".$row["DateofBirth"]."</td> "."<td>".$row["ContactNumber"]."</td> ".
              "<td>".$row["Addressline1"]."</td> "."<td>".$row["Addressline2"]."</td> "."<td>".$row["City"]."</td> "."<td>".$row["Postal"]."</td> ".
              "<td>".$row["Gender"]."</td> "."<td>".$row["Country"]."</td> "."<td>".$row["Email"]."</td> "."<td>".$row["Password"]."</td> ";
         echo "</tr>";
     }
     echo "</table>";
 }
 $con->close();
 ?>

 <form method="post" action="updatelist1.php">


    <button>Update</button>

</form>

<form method="post" action="deletlist1.php">


    <button>Delete</button>

</form>

<button><a href="login1.html" > Go to login page</button>

</body>
</html>