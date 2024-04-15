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

// Get form data
$title = $_POST["title"];
$problem = $_POST["problem"];
$description = $_POST["description"];

// Check if an image file was uploaded
if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
    $target_dir = "uploads/";

    // Construct the target file path with the original filename
    $target_file = $target_dir . $_FILES["image"]["name"];
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Image uploaded successfully
        $image_url = $target_file;
    } else {
        echo "Error uploading file.";
    }
}



// Insert data into the database
$sql = "INSERT INTO queries (title, problem, description, image_url) VALUES ('$title', '$problem', '$description', '$target_file')";

if ($conn->query($sql) === TRUE) {
    echo "Query added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
