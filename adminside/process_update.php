<?php
include('dbConnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $phoneno = $_POST['phoneno'];

    // Validate and sanitize input data (you should enhance this for security)
    $name = mysqli_real_escape_string($conn, $name);
    $state = mysqli_real_escape_string($conn, $state);
    $district = mysqli_real_escape_string($conn, $district);
    $phoneno = mysqli_real_escape_string($conn, $phoneno);

    // Update the user's information in the database
    $sql = "UPDATE users SET name='$name', state='$state', district='$district', phoneno='$phoneno' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "User information updated successfully.";
    } else {
        $errorMessage = "Error updating user information: " . $conn->error;
    }
} else {
    $errorMessage = "Invalid request.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Information</title>
    <link rel="icon" href="../images/flogo.jpg" type="image/icon type">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .notification {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            display: none;
        }

        h2 {
            margin-bottom: 30px;
            color: #4CAF50;
        }

        .success-message {
            color: #4CAF50;
            font-size: 24px;
        }

        .error-message {
            color: #f44336;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="notification">
        <?php
        if (isset($successMessage)) {
            echo '<p class="success-message">' . $successMessage . '</p>';
        } elseif (isset($errorMessage)) {
            echo '<p class="error-message">' . $errorMessage . '</p>';
        }
        ?>
    </div>
    <script>
        function showNotification() {
            var notification = document.querySelector('.notification');
            notification.style.display = 'block';
            setTimeout(function () {
                notification.style.display = 'none';
                window.location.href = 'userdetails.php'; // Change to the desired page
            }, 500); // Adjust the delay (in milliseconds) as needed
        }
        showNotification();
    </script>
</body>
</html>
