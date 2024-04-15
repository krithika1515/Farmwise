<?php
include('dbConnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mailid = $_POST['mailid'];
    $phone = $_POST['phone'];
    $specialist = $_POST['specialist'];

    // Validate and sanitize input data (you should enhance this for security)
    $name = mysqli_real_escape_string($conn, $name);
    $mailid = mysqli_real_escape_string($conn, $mailid);
    $phone = mysqli_real_escape_string($conn, $phone);
    $specialist = mysqli_real_escape_string($conn, $specialist);

    // Update the expert's information in the database
    $sql = "UPDATE expert SET name='$name', mailid='$mailid', phone='$phone', specialist='$specialist' WHERE expert_id='$id'";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Expert information updated successfully.";
    } else {
        $errorMessage = "Error updating expert information: " . $conn->error;
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
    <title>Update Expert Information</title>
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
                window.location.href = 'expertdetails.php';
            }, 300);
        }
        showNotification();
    </script>
</body>
</html>
