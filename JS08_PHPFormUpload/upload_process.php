<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";
// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}
if (isset($_FILES['photos']) && $_FILES['photos']['name'][0]) {
    $totalFiles = count($_FILES['photos']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['photos']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['photos']['tmp_name'][$i], $targetFile)) {
            echo "Image $fileName successfully uploaded.<br>";
        } else {
            echo "Failed to upload image $fileName.<br>";
        }
    }
} else {
    echo "no images uploaded.";
}
?>
