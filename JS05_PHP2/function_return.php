<?php
//membuat fungsi
function ageCount($birthDate, $currentYear){
$age = $currentYear - $birthDate;
return $age;
}
function introduce($name, $salam = "Assalamualaikum"){
    echo $salam. ",<br>";
    echo "introduce my name is ".$name."<br>";
    echo "my age now is " .ageCount(2004, 2024) ." year<br>";
    echo "Nice to meet you <br>";
}
introduce("Bina");
?>