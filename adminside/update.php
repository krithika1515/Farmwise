<?php
include('dbConnect.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$name = $_SESSION['name'];

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST["option"];

    // Update password
    if ($option === "password" || $option === "emailpassword" || $option === "passwordphoneno" || $option === "all") {
        $password = $_POST["password"];
        $sql = "UPDATE admin SET password='$password' WHERE name = '$name'";
        mysqli_query($conn, $sql);
    }

    // Update email
    if ($option === "email" || $option === "emailpassword" || $option === "emailphoneno" || $option === "all") {
        $email = $_POST["email"];
        $sql = "UPDATE admin SET email='$email' WHERE name = '$name'";
        mysqli_query($conn, $sql);
    }

    // Update phone number
    if ($option === "phoneno" || $option === "passwordphoneno" || $option === "emailphoneno" || $option === "all") {
        $phone = $_POST["phoneno"];
        $sql = "UPDATE admin SET phoneno = '$phone' WHERE name = '$name'";
        mysqli_query($conn, $sql);
    }

    // Redirect to success page or any other page
    header("Location: details.php"); // Replace with the desired destination
    exit();
}

mysqli_close($conn);
?>
