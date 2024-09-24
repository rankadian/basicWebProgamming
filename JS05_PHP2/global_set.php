<?php
$name = @$_GET['name'] ; // tanda @ agar tidak ada peringatan error ketika key—nya kosong
$age = @$_GET['age'] ; // tanda @ agar tidak ada peringatan error ketika key—nya kosong
echo "Halo {$name}! Apakah benar anda berusia {$age} tahun?" ;
?>