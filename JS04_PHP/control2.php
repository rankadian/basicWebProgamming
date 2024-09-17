<?php
$original_price = 120000;

$discount_percentage = 20;

$min_amount_for_discount = 100000;

if ($original_price > $min_amount_for_discount) {
    $discount = ($discount_percentage / 100) * $original_price;
    $final_price = $original_price - $discount;
} else {
    $final_price = $original_price;
}

echo "price after discount: Rp " . number_format($final_price, 0, ',', '.');
?>