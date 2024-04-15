<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .success-message {
            color: #4CAF50;
            font-weight: bold;
            font-size: 24px;
        }

        .error-message {
            color: #FF5733;
            font-weight: bold;
            font-size: 24px;
        }

        .redirect {
            font-size: 18px;
            margin-top: 20px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    // Check if the form data is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection parameters
        $servername = "localhost"; // Replace with your database server name
        $username = "root"; // Replace with your database username
        $password = ""; // Replace with your database password
        $dbname = "farm"; // Replace with your database name

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get the data from the form
        $queryId = $_POST["queryId"];
        $answer = $_POST["answer"];

        // Insert the answer into the database
        $sql = "INSERT INTO answers (query_id, answer) VALUES (?, ?)";

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $queryId, $answer);

        if ($stmt->execute()) {
            echo '<h1>Answer Submission</h1>';
            echo '<p class="success-message">Answer submitted successfully!</p>';
            echo '<p class="redirect"><a href="answer_query.php">answer_query.php</a> shortly.</p>';
            echo '<script>
                    setTimeout(function () {
                        window.location.href = "answer_query.php"; // Redirect to answer_query.php
                    }, 1000); // 3 seconds delay
                  </script>';
        } else {
            echo '<h1>Answer Submission</h1>';
            echo '<p class="error-message">Error: ' . $stmt->error . '</p>';
        }

        $stmt->close();

        // Close the database connection
        $conn->close();
    } else {
        // If the form is not submitted via POST, show an error message or redirect as needed
        echo '<h1>Answer Submission</h1>';
        echo '<p class="error-message">Invalid request.</p>';
    }
    ?>
</div>
</body>
</html>
