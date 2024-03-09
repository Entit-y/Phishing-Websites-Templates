<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if mobile number is set and not empty
    if (isset($_POST["mobileNumber"]) && !empty($_POST["mobileNumber"])) {
        // Sanitize mobile number input
        $mobileNumber = filter_var($_POST["mobileNumber"], FILTER_SANITIZE_STRING);

        // Validate mobile number format (you can adjust this according to your requirements)
        if (preg_match("/^[0-9]{10}$/", $mobileNumber)) {
            // Mobile number is valid, you can proceed with your registration logic here
            // For demonstration purposes, let's redirect to a different HTML page
            header("Location: Facial-ID.html"); // Redirect to test.html
            exit; // Terminate the script
        } else {
            // Invalid mobile number format
            echo "Invalid mobile number format";
        }
    } else {
        // Mobile number is not set or empty
        echo "Mobile number is required";
    }
}
?>
