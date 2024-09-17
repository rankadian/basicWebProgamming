<?php
$numericValue = 92;
if ($numericValue >= 90 && $numericValue <= 100) {
    echo"letter grade : A";
} else if ($numericValue >= 80 && $numericValue < 90) {
    echo "letter grade : B";
} else if ($numericValue >= 70 && $numericValue < 80) {
    echo "letter grade : C";
} else if ($numericValue < 70) {
    echo "letter grade : D";
}

$currentDistance = 0;
$targetDistance = 500;
$todayImprovement = 30;
$day = 0;

while ($currentDistance < $targetDistance) {
    $currentDistance += $todayImprovement;
    $day++;
}
echo"<br> the athlete needs $day days to reach a distance of 500 kilometers";

$jumlahLahan = 10;
$tanamanperLahan = 5;
$buahperTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan ; $i++) { 
$jumlahBuah += ($tanamanperLahan * $buahperTanaman);
}
echo "<br>the number of fruits to be harvested is $jumlahBuah";

$examScore = [85,92,78,96,88];
$scoreTotal = 0;
foreach ($examScore as $score) {
    $scoreTotal += $score;
}
echo "<br> score total is $scoreTotal";

$studentsGrades = [85,92,58,64,90,55,88,79,70,96];
foreach ($studentsGrades as $grades) {
    if ($grades < 60) {
        echo "grade : $grades (not pass) <br>";
        continue;
    }
    echo"grade : $grades (pass) <br>";
}
?>