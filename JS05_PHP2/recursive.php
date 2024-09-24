<?php
function showNumbers (int $amount, int $index = 1) {
echo "iteration to {$index}<br>" ;
if ($index < $amount) {
showNumbers($amount, $index + 1) ;
}
}
showNumbers(20);
?>