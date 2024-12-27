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
    <style>
body {
    background-color: #ffffff;
    background-image: url("../image/Background images/celebration.jpg");
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    margin: auto;
    font-family: ;
    position: relative;
}
body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: inherit;
    background-position: inherit;
    background-size: inherit;
    background-attachment: inherit;
    filter: blur(6px); 
    z-index: -1;
}
.nav-container{
    position:relative;
    display:flex;
    align-items: center;
    justify-content: space-between;
    z-index:100 !important;
}
#logo{
    display:block;
    width: 200px;
    height: auto;
    float:inline-start;
}
#brand-name{
    letter-spacing: 5px;
    color: #fff;
    letter-spacing: 5px;
    text-align:center;
    text-align: center;
}
.nav-bar{
    padding:0px;
    position:relative;
    display:flex;
    align-items: center;
    justify-content:end;
    z-index:100 !important;
}
.nav-bar a{
    color:var(--primary);
    text-decoration: none;
    font-weight: 575;
    font-size:20px;
    padding:10px;
    
}
.nav-bar a:hover{
    background-color: #ffffffe3;
    color:black;
}
.nav-bar a.active{
    background-color: rgba(4, 102, 167, 0.705);
    border-radius: 3px;
    color: white;
}
header{
    padding: 10px;
    background-color:#2a1b3dc0;

}

}
.profile-frame {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 2px solid #fff;  /* White border around the profile picture */
    overflow: hidden;
    transition: border-color 0.3s ease; /* Smooth transition for hover effect */
}
.profile-frame:hover {
    border-color: #f39c12; /* Highlight border color on hover */
}

.profile-pic {
    width: 100%;
    height: 100%;
    object-fit: cover;  /* Ensures the image scales properly within the frame */
    border-radius: 50%;
}
.notification-badge {
    position: absolute;
    top: 0;
    right: 0;
    background-color: red;
    color: white;
    border-radius: 50%;
    padding: 4px 6px;
    font-size: 10px;
}
footer {
    background-color: #333;      
    color: #fff;                 
    text-align: center;          
    padding: 20px 0;             
    font-family: Arial, sans-serif; 
}

  
footer h2 {
    margin: 0;                  
    font-size: 24px;            
    font-weight: bold;
}
  
  footer nav {
    margin: 10px 0;             
}
  
footer nav a {
    color: #fff;                
    text-decoration: none;      
    margin: 0 10px;             
    font-size: 16px;
}
  
  footer nav a:hover {
    text-decoration: underline; 
}
  
  footer p {
    font-size: 14px;           
    margin-top: 15px;           
}
  
footer a {
    cursor: pointer;            
}
  
footer p, footer nav a {
    font-weight: 300;     
}


        </style>


  

    
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
            <  <a class="active" href="../home/home.html">Home</a>|
            <a href="../keshi/index.php">Reminder</a>|
            <a href="../shakya/contact.html">contact</a>|
            <a href="../shakya/about.html">About Us</a>
        </div>
    </header>

    <div class="123">

    <div class="add">
        <button > <a href="tindex.php">Add User</a></button>
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

$sql="select * from travel";

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
      <button > <a href="tupdate.php?updateid='.$id.'">Update</a></button>
      </div>

       <div class="del">
      <button onclick="confirmDelete()"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
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
        window.location.href = 'tdelete.php?deleteid=' + id;
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