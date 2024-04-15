<?php
// Database connection parameters
$servername = "localhost"; // Set your database server name here
$username = "root"; // Set your database username here
$password = ""; // Set your database password here
$dbname = "farm"; // Set your database name here

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$title = "";
$problem = "";
$description = "";
$image_url = "";
$tag = "";

// Check if the POST data exists
if (isset($_POST["title"], $_POST["problem"], $_POST["description"], $_POST["tag"])) {
    $title = $_POST["title"];
    $problem = $_POST["problem"];
    $description = $_POST["description"];
    $tag = $_POST["tag"];
    
 // Check if an image file was uploaded
if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
    $target_dir = "uploads/";
    $original_filename = $_FILES["image"]["name"]; // Get the original filename
    
    $target_file = $target_dir . $original_filename;
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Image uploaded successfully
        $image_url = $target_file;
    } else {
        echo "Error uploading file.";
    }
}

    // Insert the query data into the database
    $stmt = $conn->prepare("INSERT INTO queries (title, problem, description, image_url, tag) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $problem, $description, $image_url, $tag);
    
    if ($stmt->execute()) {
        echo "Query added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Missing POST data.";
}

// Close the database connection
$conn->close();
?>
