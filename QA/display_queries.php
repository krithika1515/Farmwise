<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Queries</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        
/* Define a CSS class for the delete button */
.delete-button {
    background-color: green;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    height :50px;
    font-size:20px;
    border-radius: 3px;
    transition: background-color 0.3s ease; /* Smooth transition for background-color */
}

/* Add a hover effect */
.delete-button:hover {
    background-color: darkred;
}



        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .query {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        img {
            max-width: 30%;
            height: 30%;
        }
    </style>
</head>
<body>
    <h1>Agriculture Queries</h1>

    <?php
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

    // Fetch queries from the database (excluding query_unique_id)
    $sql = "SELECT id, title, problem, description, image_url FROM queries";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<form method="POST" action="delete_query.php">';
            echo '<div class="query">';
            echo '<h2>' . $row["title"] . '</h2>';
            echo '<p><strong>Problem:</strong> ' . $row["problem"] . '</p>';
            echo '<p><strong>Description:</strong> ' . $row["description"] . '</p>';

            // Check if the "image_url" key exists in the row before accessing it
            if (isset($row["image_url"]) && !empty($row["image_url"])) {
                echo '<img src="' . $row["image_url"] . '" alt="Query Image">';
            } else {
                echo 'No image found for this query.';
            }
            echo'<br>';
            echo'<br>';
            echo'<br>';

            echo '<input type="hidden" name="query_id" value="' . $row["id"] . '">';
            echo '<input type="submit" value="Delete" class="delete-button">';

            echo '</div>';
            echo '</form>';
        }
    } else {
        echo "No queries found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
