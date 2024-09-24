<?php
$message = "kowe arek malang";
# ubah variabel menjadi array dengan perintah explode
$messageperWord = explode(" " ,$message) ;
# ubah setiap kata datam array menjadi kebalikannya
$messageperWord = array_map(fn($message) => strrev($message), $messageperWord) ;
# gabungkan kembali array menjadi string
$message = implode(" ", $messageperWord) ;
echo "<br>" .$message;
?>