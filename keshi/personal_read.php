<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder Categories - RemindMate</title>
    <link rel="stylesheet" href="main_cat_style.css">
</head>
<body>
    <header>
        <div class="nav-container">
            <div class="logo">
                <a href="#">
                    <img src="img/logo.png" alt="Remindmate Logo" width="100px" height="100px">
                </a>
            </div>
            <h1 id="brand-name">REMINDMATE</h1>
			<div class="profile-icon">
                <img src="img/user_prof.png" alt="Remindmate Logo" width="100px" height="100px">  
            </div> 
        </div>
        <div class="nav-bar">
            <a class="active" href="">Home</a>|
            <a href="">Reminder</a>|
            <a href="#contact">contact</a>|
            <a href="#About Us">About Us</a>
        </div>
    </header>
</body>
</html>
	
	
<?php

require 'personal_config.php';

$sql="SELECT type,title,date,time,description FROM personal";

$result=$con->query($sql);


if($result->num_rows>0)
{
	echo "<table border='1'>";
	echo"<tr>";
	echo"<th>Category Type</th>";
	echo"<th>Title</th>";
	echo"<th>Date</th>";
	echo"<th>Time</th>";
	echo"<th>Description</th>";
	echo"</tr>";
	while($row=$result->fetch_assoc())
	{
		echo"<tr>";
		echo "<td>".$row["type"]."</td>"."<td>".$row["title"]."</td>"."<td>".$row["date"]."</td>"."<td>".$row["time"]."</td>"."<td>".$row["description"]."</td>";
		echo"</tr>";
	}
	
	echo"</table>";
}	
else
{
	echo"<script>alert('No Results');</script>";
}

$con->close();


?>

<!--UPDATE SECTION-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script>
        // Function to check if the selected date is in the future
        function validateDate() {
            const currentDate = new Date();
            const selectedDate = new Date(document.getElementById('date').value);

            if (selectedDate < currentDate) {
                alert("The selected date cannot be in the past. Please choose a future date.");
                return false; // Prevent form submission
            }
            return true;
        }

        // Confirmation before submission
        function confirmSubmission() {
            return confirm("Are you sure you want to save this reminder?");
        }

        // Combine both validations
        function validateForm() {
            if (validateDate()) {
                return confirmSubmission();
            }
            return false;
        }
    </script>
</head>
<body>
    <main>
	<h1>Update Section</h1>
	<!-- Form with onsubmit validation -->
        <form action="personal_update.php" method="POST">
            <h3><label for="category">Select your Personal reminder category:</label></h3>
            <select id="category" name="category">
                <option value="appointments">Appointments</option>
                <option value="birthdays">Birthdays</option>
                <option value="anniversary">Anniversary</option>
                <option value="personal_goals">Personal Goals</option>
            </select>

            <h3><label for="title">Reminder Title:</label></h3>
            <input type="text" id="title" name="title" placeholder="Enter Previous Saved Title Name to Update" required>

            <div class="reminder-schedule">
                <div class="date">
                    <h3><label for="date">Reminder Date:</label></h3>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="time">
                    <h3><label for="time">Reminder Time:</label></h3>
                    <input type="time" id="time" name="time" required>
                </div>
            </div>

            <h3><label for="description">Description:</label></h3>
            <textarea id="description" name="description" placeholder="Type here..." required></textarea>
			
			<div class="button-container">
            <button type="submit">Update</button>
			</div>

        </form>
    </main>
</body>
</html>

<!--DELETE SECTION-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <main>
	<h1>Delete Section</h1>
	<!-- Form with onsubmit validation -->
        <form action="personal_delete.php" method="POST">
			<h3><label for="title">Reminder Title:</label></h3>
            <input type="text" id="title" name="title" placeholder="Enter Previous Saved Title Name to Delete" required>

			<div class="button-container">
            <button type="submit">Delete</button>
			</div>

        </form>
    </main>
</body>
</html>

<footer>
        <h2>REMINDMATE</h2>

        <nav>
            <a href="contact.html">Contact</a> |
            <a href="privacy & policy.html">privacy & policy</a> |
            <a href="Terms&condition.html">Term & Condition</a>
        </nav>
        <p>&copy;2024 Remindmate.All rights reserved</p>

    </footer>

























