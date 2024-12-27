<?php
require 'add_other_config.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Reminder - RemindMate</title>
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
        <a class="active" href="../home/home.html">Home</a>|
        <a href="../keshi/index.php">Reminder</a>|
            <a href="#contact">contact</a>|
            <a href="#About Us">About Us</a>
        </div>
    </header>

    <main>
        <h1>Finance</h1>

        <!-- Form with onsubmit validation -->
        <form action="save_finance_reminder.php" method="POST">
            <h3><label for="category">Select your Finance reminder category:</label></h3>
            <select id="category" name="category">
                <option value="bill_payment">Bill Payment</option>
                <option value="budgeting">Budgeting</option>
                <option value="financial_goals">Financial Goals</option>
                <option value="subscriptions">Subscriptions</option>
            </select>

            <h3><label for="title">Reminder Title:</label></h3>
            <input type="text" id="title" name="title" required>

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

            <button type="submit">Save</button>
        </form>
		<div class="previous-button">
			<a href="finance_read.php">
				<button type="submit">Visit Saved Finance Reminders</button>
			</a>
		</div>
    </main>

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