<?php
$value = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

//proses pengurutan dari terkecil ke terbesar
sort($value);

$total = 0;
$min1 = $value[0];  
$min2 = $value[1];  
$max1 = $value[8];  
$max2 = $value[9]; 

//proses menghilangkan 2 nilai terbesar dan  nilai terkecil
foreach ($value as $v) {
    if ($v != $min1 && $v != $min2 && $v != $max1 && $v != $max2) {
      $average = ( $total += $v)/8;
    }
}

echo "Average of grades math students : " . $average;
?>