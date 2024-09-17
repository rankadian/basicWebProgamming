<?php
$ni1aiSiswa = [85, 92, 78, 64, 55, 88, 79, 96] ;
$ni1aiLulus = [];

foreach ($ni1aiSiswa as $nilai) {
if ($nilai >= 70) {
$ni1aiLulus []= $nilai;
}
}
echo "list of grades of students who passed :" .implode(',',$ni1aiLulus);
$employeeList = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6]
];
$fiveYearsExperienceEmployee = [];
foreach ($employeeList as $employee) {
    if ($employee[1] > 5) {
        $fiveYearsExperienceEmployee[] = $employee[0];
    }
}
echo "<br> list of employees with more than five years experience : ".implode(', ', $fiveYearsExperienceEmployee);

$listGrades = [
    'Math' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78]
    ],
    'Physic' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75]
    ],
    'Chemical' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85]
    ]
];

$mataKuliah = 'Physic'; 
echo "<br>List of student grades in courses $mataKuliah: <br>";

foreach ($listGrades[$mataKuliah] as $value) {
    echo "Name: {$value[0]}, Grade: {$value[1]} <br>";
}

$students = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$total = 0;
foreach ($students as $student) {
    $total += $student[1]; 
}
$average = $total / count($students); 

echo "<p>Rata-rata nilai kelas: $average</p>";
echo "<h2>Siswa dengan nilai di atas rata-rata:</h2>";

foreach ($students as $student) {
    if ($student[1] > $average) {
        echo "<p>Nama: {$student[0]}, Nilai: {$student[1]}</p>";
    }
}
?>