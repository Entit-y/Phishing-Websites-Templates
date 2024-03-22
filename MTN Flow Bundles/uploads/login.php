<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if credentials are correct (This is a basic example, in a real scenario you'd validate against a database)
    $valid_username = "entity";
    $valid_password = "password";

    // Check if credentials match
    if ($username === $valid_username && $password === $valid_password) {
        // If credentials are correct, redirect to a success page
        header("Location: gallery.php");
        exit;
    } else {
        // If credentials are incorrect, redirect back to login page with an error message
        header("Location: login.html?error=InvalidCredentials");
        exit;
    }
} else {
    // If form is not submitted, redirect back to login page
    header("Location: login.html");
    exit;
}
?>
