<!DOCTYPE html>
<html>
<head>
    <title>Update Expert Information</title>
    <link rel="stylesheet" href="../css/upex.css">
    <link rel="icon" href="../images/flogo.jpg" type="image/icon type">
</head>
<body>
<?php include 'header1.php'; ?>
<div class="container">
    <h1>Update Admin Information</h1>
    <form method="POST" action="update.php">
        <div class="form-group">
            <label for="option">Update:</label>
            <select id="option" name="option">
                <option value="" disabled selected>Select an option</option>
                <option value="password">Password</option>
                <option value="email">Email</option>
                <option value="phone">Phone Number</option>
                <option value="emailpassword">Email and Password</option>
                <option value="emailphone">Email and Phone Number</option>
                <option value="passwordphone">Password and Phone Number</option>
                <option value="all">All</option>
            </select>
        </div>
        <div class="form-group" id="password-group">
            <label for="password">New Password:</label>
            <input type="password" id="password" name="password" minlength="8" maxlength="16"
                   pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$">
        </div>
        <div class="form-group" id="email-group">
            <label for="email">New Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group" id="phone-group">
            <label for="phone">New Phone Number:</label>
            <input type="tel" id="phone" name="phone" minlength="10" maxlength="10" pattern="\d{10}">
        </div>
        <button type="submit" id="submit">Update</button>
    </form>
</div>

<script>
    // Get references to the form groups
    var passwordGroup = document.getElementById("password-group");
    var emailGroup = document.getElementById("email-group");
    var phoneGroup = document.getElementById("phone-group");

    // Hide the form groups initially
    passwordGroup.style.display = "none";
    emailGroup.style.display = "none";
    phoneGroup.style.display = "none";

    // Add event listener to the dropdown to show/hide form groups
    var optionDropdown = document.getElementById("option");
    optionDropdown.addEventListener("change", function () {
        var selectedOption = optionDropdown.value;
        passwordGroup.style.display = (selectedOption === "password" || selectedOption === "emailpassword" || selectedOption === "passwordphone" || selectedOption === "all") ? "block" : "none";
        emailGroup.style.display = (selectedOption === "email" || selectedOption === "emailpassword" || selectedOption === "emailphone" || selectedOption === "all") ? "block" : "none";
        phoneGroup.style.display = (selectedOption === "phone" || selectedOption === "passwordphone" || selectedOption === "emailphone" || selectedOption === "all") ? "block" : "none";
    });
</script>

</body>
</html>
