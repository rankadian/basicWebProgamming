<?php
$totalSeat = 45;
$occupiedSeat = 28;
$emptySeat = $totalSeat - $occupiedSeat;
$percentEmptySeat = ($emptySeat /$totalSeat) * 100;
echo "total seat in the restaurant is {$totalSeat} seats and {$occupiedSeat} seats have been filled, then the remaining empty seats are {$emptySeat}. and value of the percentage seats are still empty in the restaurant is {$percentEmptySeat}%";
?>