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
    if ($option === "password" || $option === "emailpassword" || $option === "passwordphone" || $option === "all") {
        $password = $_POST["password"];
        $sql = "UPDATE expert SET password='$password' WHERE name = '$name'";
        mysqli_query($conn, $sql);
    }

    // Update email
    if ($option === "email" || $option === "emailpassword" || $option === "emailphone" || $option === "all") {
        $email = $_POST["email"];
        $sql = "UPDATE expert SET mailid='$email' WHERE name = '$name'";
        mysqli_query($conn, $sql);
    }

    // Update phone number
    if ($option === "phone" || $option === "passwordphone" || $option === "emailphone" || $option === "all") {
        $phone = $_POST["phone"];
        $sql = "UPDATE expert SET phone = '$phone' WHERE name = '$name'";
        mysqli_query($conn, $sql);
    }

    // Redirect to success page or any other page
    header("Location: expertdetails.php"); // Replace with the desired destination
    exit();
}

mysqli_close($conn);
?>
