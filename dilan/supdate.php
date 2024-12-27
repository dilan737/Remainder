<?php
include 'config.php';

// Get the record to update
$id = $_GET['updateid'];
$sql = "SELECT * FROM social WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$etitle = $row["Remainder"];
$edate = $row["Date"];
$etime = $row["Time"];
$eremain = $row["Erepeat"];

if (isset($_POST['submit'])) {
    $etitle = $_POST["title"];
    $edate = $_POST["date"];
    $etime = $_POST["time"];
    $eremain = $_POST["remain"];

    // Corrected SQL update query
    $sql = "UPDATE social SET Remainder='$etitle', Date='$edate', Time='$etime', Erepeat='$eremain' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Display alert and redirect to read.php
        echo "<script>alert('Updated Successfully!'); window.location.href='sread.php';</script>";
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
    <title>CRUD Operation Demo</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>

<div class="container">
    <form method="post" onsubmit="return validateForm()">

        <div class="form-group">
            <input type="text" name="title" id="title" placeholder="Title" value="<?php echo $etitle;?>" required>
        </div>

        <div class="form-group">
            <input type="date" class="form-control" name="date" id="date" value="<?php echo $edate;?>" required>
        </div>

        <div class="form-group">
            <input type="time" class="form-control" name="time" id="time" value="<?php echo $etime;?>" required>
        </div>

        <div class="form-group">
            <label>Repeat:</label>
            <ul>
                <li>None <input type="radio" name="remain" value="None" <?php if($eremain == 'None') echo 'checked'; ?> required></li>
                <li>Daily <input type="radio" name="remain" value="Daily" <?php if($eremain == 'Daily') echo 'checked'; ?>></li>
                <li>Monthly <input type="radio" name="remain" value="Monthly" <?php if($eremain == 'Monthly') echo 'checked'; ?>></li>
                <li>Yearly <input type="radio" name="remain" value="Yearly" <?php if($eremain == 'Yearly') echo 'checked'; ?>></li>
            </ul>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<script>
    function validateForm() {
        var title = document.getElementById('title').value;
        var date = document.getElementById('date').value;
        var time = document.getElementById('time').value;
        var remain = document.querySelector('input[name="remain"]:checked');

        if (title === "" || date === "" || time === "" || remain === null) {
            alert("Please fill out all fields before submitting.");
            return false; // Prevent form submission
        } else {
            //alert("Successfully Updated!");
            return true; // Allow form submission
        }
    }
</script>

</body>
</html>
