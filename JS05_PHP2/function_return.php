<?php
//membuat fungsi
function ageCount($birthDate, $currentYear){
$age = $currentYear - $birthDate;
return $age;
}
echo "my age now is " .ageCount(2004, 2024) ." year";
?>