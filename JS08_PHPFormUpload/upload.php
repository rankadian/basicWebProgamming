<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxsize = 5 * 1024 * 1024;
    
    // Check if the file is allowed and its size is within the limit
    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File successfully uploaded.<br>";

            // Display the uploaded image as a thumbnail
            echo "<img src='$targetfile' width='200' style='height:auto;' alt='Uploaded Image'>";
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "File is invalid or exceeds the specified size limit.";
    }
}
?>
