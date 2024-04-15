<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert Deletion</title>
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
            margin-bottom: 20px;
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
    <script>
        function showNotification(message, isSuccess) {
            var notification = document.querySelector('.notification');
            var messageElement = notification.querySelector('.message');

            if (isSuccess) {
                notification.style.backgroundColor = '#4CAF50';
                messageElement.style.color = '#ffffff';
            } else {
                notification.style.backgroundColor = '#f44336';
                messageElement.style.color = '#ffffff';
            }

            messageElement.textContent = message;
            notification.style.display = 'block';

            setTimeout(function () {
                notification.style.display = 'none';
                // Redirect to userdetails.php after notification disappears
                window.location.href = 'expertdetails.php';
            }, 300);
        }
    </script>
</head>

<body>
    <div class="notification">
        <p class="message"></p>
    </div>

    <?php
    include('dbConnect.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Delete the expert from the database based on the ID
        $sql = "DELETE FROM expert WHERE expert_id = ?";

        // Use prepared statements to avoid SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $id);

        if ($stmt->execute()) {
            echo "<script>showNotification('Expert deleted successfully.', true);</script>";
        } else {
            echo "<script>showNotification('Error deleting expert: " . $conn->error . "', false);</script>";
        }

        $stmt->close();
    } else {
        echo "<script>showNotification('Invalid request.', false);</script>";
    }

    $conn->close();
    ?>
</body>

</html>
