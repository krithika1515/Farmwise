<html>
    <head>
        <style>
            body{
                background-color:green;
                background-image:url("bg3.jpg");
  background-size: 100% 100%;;
            background-repeat: no-repeat;
            background-attachment: fixed;
            }
            /* Style for the container div */
/* Style for problem and description with larger text */
.query .problem-label,
.query .problem-description {
    font-size: 18px; /* Adjust the font size as needed */
    color: #666;
    margin-top: 10px;
}

/* Style for the container div */
.query {
    background-color: rgba(255, 255, 255, 0.13);
   backdrop-filter: blur(5px); 
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    margin: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Style for the query title */
.query h2 {
    font-size: 20px;
    margin: 0;
    color: #333;
}

/* Style for labels */
.problem-label {
    font-weight: bold;
    color: green;
    font-size:230px;
}

.big{
    .problem-label {
    font-weight: bold;
    color: black;
    font-size:30px;
}

}

/* Style for query image */
.query img {
    max-width: 100%;
    margin-top: 10px;
}

/* Style for the answer form */
.answer-form {
    margin-top: 20px;
}

.answer-form label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
}

.answer-form textarea {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    margin-top: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.answer-form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

/* Style for the "No queries available" message */
.no-queries {
    text-align: center;
    margin-top: 50px;
    font-size: 20px;
    color: #ff0000;
}

        </style>
    </head>
    <body>



<?php
session_start();

include('header1.php');

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

// Retrieve the expert's name from the session
$name = $_SESSION['name']; // Replace 'name' with your actual session variable name

// Fetch queries from the database that match the expert's specialization
$sql = "SELECT queries.id, title, problem, description, image_url FROM queries
        LEFT JOIN answers ON queries.id = answers.query_id
        WHERE answers.query_id IS NULL AND tag = (SELECT specialist FROM expert WHERE name = ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="query">';
        echo '<center><h2>' . $row["title"] . '</h2></center>';
        echo '<br><p><div class="big"><strong class="problem-label">Problem:</strong></div> <br>' . $row["problem"] . '</p>';
        
        echo '<br><br><div class="big"><p><strong class="problem-label">Description:</strong><div><br> ' . $row["description"] . '</p><br>';

        // Check if the "image_url" key exists in the row before accessing it
        if (!empty($row["image_url"]) && file_exists($row["image_url"])) {
            echo '<img src="' . $row["image_url"] . '" alt="Query Image">';
        } else {
            echo 'No image found for this query.';
        }

        // Add a form to answer the query
        echo '<form class="answer-form" action="submit_answer.php" method="POST">';
        echo '<input type="hidden" name="queryId" value="' . $row["id"] . '">'; // Hidden input to store query ID
        echo '<div class="big"><label for="answer">Your Answer:</label></div><br>';
        echo '<textarea id="answer" name="answer" rows="4" cols="50" required></textarea><br>';
        echo '<input type="submit" value="Submit Answer">';
        echo '</form>';

        echo '</div>';
    }
} else {
    echo '<div style="text-align: center; margin-top: 50px; font-size: 24px;">No queries available for this expert.</div>';
}

// Close the database connection
$stmt->close();
$conn->close();
?>

