<?php

include 'config.php';

if (isset($_POST['submit'])) {

    //$ecat = $_POST["categary"];//
    $etitle = $_POST["title"];
    $edate = $_POST["date"];
    $etime = $_POST["time"];
    $eremain = $_POST["remain"];

    $sql = "INSERT INTO social (Remainder, Date, Time, Erepeat)
            VALUES ('$etitle', '$edate', '$etime', '$eremain')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:sread.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/index.css">
    <title>CRUD operation demo</title>
</head>
<body>

<div class="container">
    <form method="post" onsubmit="return validateForm()"> 

        <input type="text" name="title" placeholder="Title" required>

        <!-- 
        <div class="categary">
            <select name="categary" id="categary" required>
                <option value="">Select event Title</option>
                <option value="Cleaning">Cleaning</option>
                <option value="Bill payment">Bill payment</option>
                <option value="Medicine">Medicine</option>
                <option value="Appointment">Appointment</option>
            </select>
        </div>
        -->

        <div class="date">
            <label>Date</label>
            <input type="date" class="form-control" name="date" id="date" required>
        </div>

        <div class="time">
            <label>Time</label>
            <input type="time" class="form-control" name="time" id="time" required>
        </div>

        <div class="fradio">
            <label>Repeat</label>
            <ul>
                <li>None <input type="radio" name="remain" value="None" required></li>
                <li>Daily <input type="radio" name="remain" value="Daily"></li>
                <li>Monthly <input type="radio" name="remain" value="Monthly"></li>
                <li>Yearly <input type="radio" name="remain" value="Yearly"></li>
            </ul>
        </div>

        <button type="submit" name="submit">Submit</button>

    </form>

    <script>
        function validateForm() {
            var title = document.getElementsByName('title')[0].value;
            var date = document.getElementById('date').value;
            var time = document.getElementById('time').value;
            var remain = document.querySelector('input[name="remain"]:checked');

            if (title === "" || date === "" || time === "" || remain === null) {
                alert("Please fill out all fields before submitting.");
                return false; // Prevent form submission
            } else {
                alert("Successfully Added!");
                return true; // Allow form submission
            }
        }
    </script>

</div>
</body>
</html>
