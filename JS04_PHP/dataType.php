<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10*5);
$e = $d - $c;

echo "Variable a : {$a} <br>";
echo "Variable b : {$b} <br>";
echo "Variable c : {$c} <br>";
echo "Variable d : {$d} <br>";
echo "Variable e : {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$NilaiBahasaIndonesia = 9.3;
$rataRata = ($nilaiMatematika + $nilaiIPA + $NilaiBahasaIndonesia) / 3;
echo "Math : {$nilaiMatematika} <br>";
echo "Science : {$nilaiIPA} <br>";
echo "Indonesian Language : {$NilaiBahasaIndonesia} <br>";
echo "Average : {$rataRata} <br>";
var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;


echo "he has passed the grade. <br>".var_dump($apakahSiswaLulus);
echo " he hasn't taken the exam yet.".var_dump($apakahSiswaSudahUjian);

$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan. '' .$namaBelakang;

echo "<br><br>";
echo "First Name : {$namaDepan} <br>";
echo 'Last  Name : '. $namaBelakang .'<br>';
echo $namaLengkap;

$listMahasiswa = ["<br>Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>