<?php

 include 'config.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    
    <link rel="stylesheet" href="style/read.css">
    <link rel="stylesheet" href="style/header.css">

  

    
</head>
<body>
<header>
        <div class="nav-container">
            <div class="logo">
                <a href="#">
                    <img src="../image/Logo/RemindMate Logo.png" alt="Remindmate Logo" width="100px" height="100px">
                </a>
            </div>
            <h1 id="brand-name">REMINDMATE</h1>
            <div class="nav-buttons">
                <button type="button" class="btn-log">Log in</button><button type="button" class="btn-get">Get Started</button>  
            </div> 
        </div>
        <div class="nav-bar">
             <a class="active" href="../home/home.html">Home</a>|
            <a href="../keshi/index.php">Reminder</a>|
            <a href="../shakya/contact.html">contact</a>|
            <a href="../shakya/about.html">About Us</a>
        </div>
    </header>

    <div class="container">

    <div class="add">
        <button > <a href="hindex.php">Add User</a></button>
    </div>

     <div class="tab">

    <table class="table">
  <thead>
    <tr>

      <th scope="col">Event Title</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Repeat</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
</td>
  <tbody>
<?php

$sql="select * from hobbies";

$result=mysqli_query($con,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){

    $id=$row["ID"];
    $title=$row["Remainder"];
    $edate=$row["Date"];
    $etime=$row["Time"];

    $eremain=$row["Erepeat"];
  


    echo '    <tr>
      
      <td>'.$title.'</td>
      <td>'.$edate.'</td>
      <td>'.$etime.'</td>
        <td>'.$eremain.'</td>
    
      <td>

          <div class="up">
      <button > <a href="hupdate.php?updateid='.$id.'">Update</a></button>
      </div>

       <div class="del">
      <button onclick="confirmDelete()"><a href="hdelete.php?deleteid='.$id.'">Delete</a></button>
            </div>

      
      </td>

    
 
    </tr>';
    
}


}






?>
<script>
function confirmDelete() {
    if (confirm('Are you sure you want to delete this item?')) {
        // If the user confirms, redirect to delete.php with the id
        window.location.href = 'hdelete.php?deleteid=' + id;
    }
    // If the user cancels, do nothing (stay on the page)
}
</script>

</tbody>
</table>

<br><br>



    
<footer>
        <h2>REMINDMATE</h2>

        <nav>
            <a href="contact.html">Contact</a> |
            <a href="privacy & policy.html">privacy & policy</a> |
            <a href="Terms&condition.html">Term & Condition</a>
        </nav>
        <p>&copy;2024 Remindmate.All rights reserved</p>

    </footer>

   
</body>
</html> 