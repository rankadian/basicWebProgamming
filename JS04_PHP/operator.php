<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo " add result : {$hasilTambah} <br>";
echo " minus result : {$hasilKurang} <br>";
echo " multiply result : {$hasilKali} <br>";
echo " division result : {$hasilBagi} <br>";
echo " division remainder : {$sisaBagi} <br>";
echo " rank result : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo " equal result : {$hasilSama} <br>";
echo " not equal result : {$hasilTidakSama} <br>";
echo " smaller than result : {$hasilLebihKecil} <br>";
echo " greater than result : {$hasilLebihBesar} <br>";
echo " smaller than or equal result : {$hasilLebihKecilSama} <br>";
echo " greater than or equal result : {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasil0r = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo " and result : {$hasilAnd} <br>";
echo " or result : {$hasil0r} <br>";
echo " not a result : {$hasilNotA} <br>";
echo " not b result : {$hasilNotB} <br>";

$assigmentSum = $a += $b;
$assigmentSubtraction = $a -= $b;
$assignmentMul = $a *= $b;
$assignmentDiv = $a /= $b;
$assignmentRem = $a %= $b;

echo " Assignment with summation : {$assigmentSum} <br>";
echo " Assignment with subtraction : {$assigmentSubtraction} <br>";
echo " Assignment by multiplication : {$assignmentMul} <br>";
echo " Assignment by division : {$assignmentDiv} <br>";
echo "Assignment with remainder divided by : {$assignmentRem} <br>";

$identicResult = $a === $b;
$notIdenticResult = $a !== $b;

echo " identic result : {$identicResult} <br>";
echo "not identic result : {$notIdenticResult} <br>";
?>