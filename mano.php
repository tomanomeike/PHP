<?php
/**
 * Created by PhpStorm.
 * User: toman
 * Date: 2019-01-06
 * Time: 21:53
 */

$mokiniai=[
    ["vardas"=> "Jonas", "pazymiai" =>
        ["lietuviu" => [4, 8, 6, 7],
            "anglu" => [6, 7, 8],
            "matematika" => [3, 5, 4]]],
    ["vardas" => "Ona", "pazymiai" =>
        ["lietuviu" => [10, 6, 10],
            "anglu" => [9, 8, 10],
            "matematika" => [10, 10, 9, 9]]]

];
$gradesAverage=[];
foreach ($mokiniai as $key => $student) {
    if(is_array($student )){
        foreach($student as $key1 => $lesson){
            if(is_array($lesson)){
                foreach($lesson as $key2 => $grade){
                    $average=array_sum($grade) / count($grade);
                    echo $average."<br>";
                }
            }
            else {
                echo $lesson."<br>";
            }
        }
    }
    else {
        echo $student."<br>";
    }
}
//foreach ($gradesAverage as $name => $studentGrade) {
//
//    if ($average > $bestAverage) {
//        $bestAverage=$average;
//        $bestStudent=$name;
//    }
//}
//echo 'Geriausias studentas ' . $bestStudent . " su vidurkiu " . max($average);