<?php
// Database connection parameters
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "farm"; // Replace with your database name

// Check if a query ID was provided
if (isset($_POST["query_id"])) {
    $queryId = $_POST["query_id"];

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Start a transaction to ensure both queries are executed or rolled back together
    $conn->begin_transaction();

    // First, delete answers associated with the query
    $sqlDeleteAnswers = "DELETE FROM answers WHERE query_id = ?";
    
    // Use a prepared statement to prevent SQL injection
    $stmtDeleteAnswers = $conn->prepare($sqlDeleteAnswers);
    $stmtDeleteAnswers->bind_param("i", $queryId);
    
    if ($stmtDeleteAnswers->execute()) {
        // Second, delete the query itself
        $sqlDeleteQuery = "DELETE FROM queries WHERE id = ?";
        
        // Use a prepared statement to prevent SQL injection
        $stmtDeleteQuery = $conn->prepare($sqlDeleteQuery);
        $stmtDeleteQuery->bind_param("i", $queryId);
        
        if ($stmtDeleteQuery->execute()) {
            // Both delete operations were successful, commit the transaction
            $conn->commit();
            echo "Query and associated answers deleted successfully!";
        } else {
            // Error deleting the query, roll back the transaction
            $conn->rollback();
            echo "Error deleting query: " . $stmtDeleteQuery->error;
        }

        $stmtDeleteQuery->close();
    } else {
        // Error deleting answers, roll back the transaction
        $conn->rollback();
        echo "Error deleting answers: " . $stmtDeleteAnswers->error;
    }

    $stmtDeleteAnswers->close();
    
    // Close the database connection
    $conn->close();
} else {
    echo "Invalid query ID.";
}
?>
