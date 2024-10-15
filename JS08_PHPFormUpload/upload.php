<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir .basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
    $allowedExtensions = array("txt","pdf", "doc", "docx");
    $maxsize = 3*1024*1024;
    if (in_array($fileType, $allowedExtensions)&& $_FILES["myfile"]["size"]<=$maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"],  $targetfile)) {
            echo "File successed upload";
        } else {
            echo "Failed to uploaded file";
        }
    } else {
        echo "file is invalid or exceeds the specified capacity size";
} 
}
?>