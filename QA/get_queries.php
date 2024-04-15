<?php
// Database connection parameters
$servername = " ";
$username = " ";
$password = " ";
$dbname = " ";

// Create a connection
$conn = new mysqli('localhost','root','','farm');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch queries from the database
$sql = "SELECT id, title, problem, description, image_url FROM queries";
$result = $conn->query($sql);

$queries = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $queries[] = $row;
    }
}

// Close the database connection
$conn->close();

// Send query data as JSON response
header("Content-Type: application/json");
echo json_encode($queries);
?>
