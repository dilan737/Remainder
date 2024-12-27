<?php

include 'config.php';

if (isset($_POST['submit'])) {


    $etitle = $_POST["title"];
    $edate = $_POST["date"];
    $etime = $_POST["time"];
    $eremain = $_POST["remain"];

    $sql = "INSERT INTO house (Remainder, Date, Time, Erepeat)
            VALUES ('$etitle', '$edate', '$etime', '$eremain')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:read.php');
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
    <title>CRUD operation Event</title>

</head>
<body>

<div class="container">
    
    <form method="post" onsubmit="return validateForm()"> 

        <input type="text"  name="title" placeholder="Title" >

    

        <div class="date">
            <label>Date</label>
            <input type="date" class="form-control" name="date" id="date" >
        </div>

        <div class="time">
            <label>Time</label>
            <input type="time" class="form-control" name="time" id="time" >
        </div>

        <div class="fradio">
            <label>Repeat</label>
            <ul>
                <li>None <input type="radio" name="remain" value="None" ></li>
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
