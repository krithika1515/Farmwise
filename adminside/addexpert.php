<!DOCTYPE html>
<html>
<head>
    <title>Expert Registration</title>
    <link rel="icon" href="../images/flogo.jpg" type="image/icon type">
        <style>
            /* Reset some default styles */
body, html {
    margin: 0;
    padding: 0;
}

/* Apply a background image */
.bg {
    background-image: url('your-image-url.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 90.3vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
}

/* Style the form container */
.container {
    background-color: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);
    padding: 20px;
    width: 80%; /* Adjust the width as needed */
    max-width: 400px; /* Add a maximum width to avoid stretching on larger screens */
    text-align: center;
}

/* Style the form title */
.title {
    font-size: 25px;
    font-weight: 500;
    position: relative;
    margin-bottom: 20px; /* Add some space below the title */
}

/* Add an underline below the title */
.title::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -5px; /* Adjust this value to control the underline's position */
    height: 3px;
    width: 30px;
    border-radius: 5px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}

/* Style input boxes */
.user-details {
    display: flex;
    flex-direction: column;
}

.input-box {
    margin: 10px 0;
    text-align: left;
}

.input-box .details {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.input-box input[type="text"],
.input-box input[type="email"] {
    height: 40px;
    width: 100%;
    padding: 5px;
    font-size: 16px;
    border-radius: 5px;
    outline: none;
    border: 1px solid #ccc;
    transition: border-color 0.3s ease;
}

.input-box input:focus,
.input-box input:valid {
    border-color: #01BF71;
}

/* Style the Register button */
.button input[type="submit"] {
    height: 45px;
    width: 100%;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    transition: background 0.3s ease;
    background: linear-gradient(120deg, #00467F, #A5CC82);
}

.button input[type="submit"]:hover {
    background: linear-gradient(-120deg, #00467F, #A5CC82);
}

        </style>

    <?php

ob_start(); // Start output buffering

include 'header1.php';

include('dbConnect.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mailid = $_POST["mailid"];
    $phone = $_POST["phone"];
    $specialist = $_POST["specialist"];
    $password = $_POST["password"];

    // Insert data into the "expert" table
    $sql = "INSERT INTO expert (name, mailid, phone, specialist, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $mailid, $phone, $specialist, $password);

    if ($stmt->execute()) {
        // Redirect to expertdetails.php
        header("Location: expertdetails.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

ob_end_flush(); 

$conn->close();
?>



<body>
    <div class="bg">
        <div class="container">
            <form id="registrationForm" action="addexpert.php" method="post">
                <div class="title">Expert Registration</div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name:</span>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email:</span>
                        <input type="email" id="mailid" name="mailid" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone:</span>
                        <input type="text" id="phone" name="phone">
                    </div>
                    <div class="input-box">
                        <span class="details">Password:</span>
                        <input type="text" id="password" name="password">
                    </div>
                    <div class="input-box">
                        <span class="details">Specialist:</span>
                            <select id="specialist" name="specialist" required>
                                <option value="disabled value">Select an Option</option>
                                <option value="Crop Specialist">Crop Specialist</option>
                                <option value="Livestock Expert">Livestock Expert</option>
                                <option value="Sustainability & Environment Consultant">Sustainability & Environment Consultant</option>
                                <option value="AgTech Innovator">AgTech Innovator</option>
                                <option value="Soil Scientist & Agronomist">Soil Scientist & Agronomist</option>
                                <option value="Organic Farming Advocate">Organic Farming Advocate</option>
                                <option value="Farm Management Consultant">Farm Management Consultant</option>
                                <option value="Horticulturalist & Specialty Crop Guru">Horticulturalist & Specialty Crop Guru</option>
                                <option value="Agricultural Policy Analyst">Agricultural Policy Analyst</option>
                                <option value="Educator & Extension Agent">Educator & Extension Agent</option>
                            </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
