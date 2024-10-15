<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";
// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}
if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        // Pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName successed upload <br>";
        } else {
            echo "Failed to upload file $fileName.<br>";
        }
    }
} else {
    echo "no files uploaded.";
}
?>