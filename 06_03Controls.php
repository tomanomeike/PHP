<!DOCTYPE html>
<html>
<head>
    <title>Masyvai</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
$zmones = [
    ['vardas' => 'Jonas', 'lytis' => 'V'],
    ['vardas' => 'Ona', 'lytis' => 'M'],
    ['vardas' => 'Petras', 'lytis' => 'V'],
    ['vardas' => 'Maryte', 'lytis' => 'M'],
    ['vardas' => 'Egle', 'lytis' => 'M']
];
var_dump($zmones);

function combination($zmones){
    foreach ($zmones as $indeksas1=> $name) {
        foreach ($zmones as $indeksas2=> $secondName) {
            if ($indeksas1 < $indeksas2 && $name['lytis'] != $secondName['lytis']) {
                echo "<br>" .
                    $indeksas1 . " " .
                    $name['vardas'] . " - " .
                    $indeksas2 . " " .
                    $secondName['vardas'];
            }
        }
    }
}
combination($zmones);

echo "<hr>";

function combination2($zmones)
{
    foreach ($zmones as $indeksas1 => $name) {
        foreach ($zmones as $indeksas2 => $secondName) {
            foreach ($zmones as $indeksas3 => $thirdName) {
                if ($indeksas1 < $indeksas2 && $indeksas2 < $indeksas3 && ($indeksas1 != $indeksas2 || $indeksas1 != $indeksas3 )){
                    echo "<br>" .
                        $indeksas1 . " " .
                        $name['vardas'] . " - " .
                        $indeksas2 . " " .
                        $secondName['vardas']. " - ".
                        $indeksas3 . " " .
                        $thirdName['vardas'];
                }
            }
        }
    }
}
combination2($zmones);

$mokiniai=[
        ["vardas"=> "Jonas",
        "pazymiai" =>
            ["lietuviu" => [4, 8, 6, 7],
            "anglu" => [6, 7, 8],
            "matematika" => [3, 5, 4]
            ]
        ],
        ["vardas" => "Ona",
        "pazymiai" =>
            ["lietuviu" => [10, 6, 10],
            "anglu" => [9, 8, 10],
            "matematika" => [10, 10, 9, 9]]
        ]

];
var_dump($mokiniai);
function gradeAverage($mokiniai)
{
    $arrayGrades= [];
    foreach ($mokiniai as $key1 => $student) {
        if (is_array($student)) {
            foreach ($student["pazymiai"] as $key2 => $lesson) {
                if (is_array($lesson)) {
                    foreach ($lesson as $key3 => $grade) {
                        $arrayGrades[$student['vardas']][] = $grade;
                    }
                } else {
                    echo $lesson . "<br>";
                }
            }
        } else {
            echo $student."<br>";
        }
    }
    var_dump($arrayGrades);

    foreach($arrayGrades as $name => $studentGrade){
        $average = array_sum($studentGrade)/count($studentGrade);
        if($average > $bestAverage){
            $bestAverage=$average;
            $bestStudent=$name;
        }
    }
    echo 'Geriausias studentas ' . $bestStudent . " su vidurkiu " . $bestAverage;
}
gradeAverage($mokiniai);


?>
</body>
</html>