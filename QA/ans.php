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

        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        h2{
            text-align:center;
        }

        P{

            margin-right: 10px; /* Add some space between label and problem text */
            font-size:20px;

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

        .problem-label {
    font-weight: bold;
    color: #FF5733; /* Choose your desired text color */
    margin-right: 10px; /* Add some space between label and problem text */
    font-size:30px;

}
.problem-label1 {
    font-weight: bold;
    color: white; /* Choose your desired text color */
    margin-right: 10px; /* Add some space between label and problem text */
    font-size:30px;
}
 .ans{
    background-color:green;
    color:white;
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
    $sql = "SELECT queries.id, title, problem, description, image_url, answer FROM queries LEFT JOIN answers ON queries.id = answers.query_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="query">';
            echo '<h2>' . $row["title"] . '</h2>';
            echo '<p><strong class="problem-label">Problem:</strong> ' . $row["problem"] . '</p>';
            echo '<p><strong class="problem-label">Description:</strong> ' . $row["description"] . '</p>';

            // Check if the "image_url" key exists in the row before accessing it
            if (isset($row["image_url"]) && !empty($row["image_url"])) {
                echo '<img src="' . $row["image_url"] . '" alt="Query Image">';
            } else {
                echo 'No image found for this query.';
            }

            // Display the answer if available
            if (isset($row["answer"]) && !empty($row["answer"])) {
                echo '<div class="ans"><p><strong class="problem-label1">Answer:</strong> ' . $row["answer"] . '</p></div>';
            } else {
                echo '<p ><strong >Answer:</strong> No answer provided yet.</p> ';
            }

            echo '</div>';
        }
    } else {
        echo "No queries found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
