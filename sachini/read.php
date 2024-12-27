<html>
<head>
    <link rel="stylesheet" href="css.css">
</head>    
<body>    


<?php

require 'connect.php'; //set connection



//sql query for read
$sql="SELECT 
            Paymentmethode,
            cardNumber,
            cardName,
            expiryDate,
            ccv,
            city,
            contactNumber,
            country 
            FROM pay";


$result=$con->query($sql);

if($result->num_rows>0)
{
    echo"<table class='content-table'>";
    echo"<thead>";
    echo"<tr>";
    echo 
    "<th>Paymentmethode</th>".
    "<th>cardNumber </th>".
    "<th>cardName </th>".
    "<th>expiryDate </th>".
    "<th> ccv </th>".
    "<th>city</th>".
    "<th>contactNumber</th>".
    "<th>country</th>";
   
    echo"</thead>";
    echo"</tr>";

    //to get one by one rows in $result
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
         echo "<td>".$row["Paymentmethode"]."</td> "."<td>".$row["cardNumber"]."</td>"."<td>".$row["cardName"]."</td> ".
         "<td>".$row["expiryDate"]."</td> "."<td>".$row["ccv"]."</td> "."<td>".$row["city"]."</td> "."<td>".$row["contactNumber"]."</td> "."<td>".$row["country"]."</td> ";
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

<form method="post" action="updatelist.php">


    <button>Update</button>

</form>

<form method="post" action="deletelist.php">


    <button>Delete</button>

</form>
<form method="post" action="../home/rhome.html">
<button style=background-color:green> Home page</button>
</form>
</body>
</html>