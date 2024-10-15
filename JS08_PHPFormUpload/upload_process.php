<?php
if ($_FILES['files']['name'][0]) {
    for ($i=0; $i <$totalFiles ; $i++) { 
        $fileName = $_FILES ['files']['name'][$i];
        $targetfile = $targetDirectory .$fileName;

        if (move_uploaded_file($_FILES["files"]["tmp_name"][$i],  $targetfile)) {
            echo "File $fileName successed upload <br>";
        } else {
            echo "Failed to uploaded file $fileName <br>";
        }      
    }
} else {
    echo "no files uploaded";
}

?>