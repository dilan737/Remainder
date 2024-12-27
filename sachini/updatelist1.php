<html>
<head>
<link rel="stylesheet" href="box2.css">
</head>
<body>
    
<form id="registrationForm" action="update1.php" method="POST">
                <div class="form-group">
                    <div class="form">
                        <label for="first_name"><b>First Name:</b></label>
                        <input type="text" id="first_name" name="first_name" required>
                    </div>
                    <div class="form">
                        <label for="last_name"><b>Last Name:</b></label>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                </div>

                <label for="dob"><b>Date of Birth:</b></label>
                <input type="date" id="dob" name="dob" required><br>

                <label for="phone"><b>Contact Number:</b></label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" size="50px" required><br>

                <div class="set">
                    <div>
                        <label for="address"><b>Address:</b></label>
                        <input type="text" id="line1" name="line1" placeholder="Line 1" required><br>
                        <input type="text" id="line2" name="line2" placeholder="Line 2" required><br>
                        <input type="text" id="city" name="city" placeholder="City/Town" required><br>
                        <input type="text" id="postal" name="postal" placeholder="Postal Code" required><br>
                    </div>
                    <div>
                        <label for="gender"><b>Gender:</b></label><br>
                        <input type="radio" id="male" name="gender" value="Male"> Male
                        <input type="radio" id="female" name="gender" value="Female" required> Female<br><br>

                        <label for="country"><b>Country:</b></label>
                        <input type="text" id="country" name="country" size="50px" required>
                    </div>
                </div>

                <div class="imgs">
                    <div>
                        <label for="email"><b>Email:</b></label>
                        <input type="email" id="email" name="email" required><br>

                        <label for="password"><b>Password:</b></label>
                        <input type="password" id="password" name="password" minlength="8" required>
                        <p style="color: red;">Minimum 8 characters</p>

                        <label for="confirm_password"><b>Re-Enter Password:</b></label>
                        <input type="password" id="confirm_password" name="confirm_password" required><br>

                       
                        <button type="submit" class="login-btn1" >Update now</button>
                    </div>
                 
                </div>
            </form>

</body>
</html>