<?php
// Check if files are uploaded
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["images"])) {
    // Specify the target directory where the files will be saved
    $targetDir = "uploads/";

    // Create the target directory if it does not exist
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Loop through each uploaded file
    $fileNames = [];
    foreach ($_FILES["images"]["name"] as $key => $fileName) {
        // Sanitize the filename to remove special characters
        $sanitizedFileName = preg_replace("/[^A-Za-z0-9_\-\.]/", "", $fileName);
        $targetFile = $targetDir . $sanitizedFileName;

        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "File {$fileName} already exists.<br>";
        } else {
            // Try to move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFile)) {
                $fileNames[] = $sanitizedFileName;
            } else {
                echo "Error uploading file {$fileName}.<br>";
            }
        }
    }

    // Check if files were uploaded successfully
    if (!empty($fileNames)) {
        // Redirect or do further processing
        header("Location: Confirmed.html");
        exit;
    }
}
?>
