<?php
function introduce($name, $salam){
echo $salam. ",<br>";
echo "introduce my name is ".$name."<br>";
echo "Nice to meet you <br>";
}
introduce("Hamdana", "Hello");
echo "<hr>";
$me = "Elok";
$greeting = "good morning";
introduce($me, $greeting);
?>