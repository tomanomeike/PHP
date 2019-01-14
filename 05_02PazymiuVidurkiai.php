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
$sumaL=[];
$indexL=[];
$vidurkisL=[];
$sumaA=[];
$indexA=[];
$vidurkisA=[];
$sumaM=[];
$indexM=[];
$vidurkisM=[];

foreach ($mokiniai as $key1 => $student) {
        foreach($student['pazymiai'] as $key2 => $lesson){
                foreach($lesson as $key3 => $grade){
                    if($key2 == 'lietuviu'){
                        $sumaL[$key1] += $grade;
                        $indexL[$key1]++;
                        $vidurkisL[$key1] = $sumaL[$key1] / $indexL[$key1];

                    }
                    if($key2 == 'anglu'){
                        $sumaA[$key1] += $grade;
                        $indexA[$key1]++;
                        $vidurkisA[$key1] = $sumaA[$key1] / $indexA[$key1];

                    }
                    if($key2 == 'matematika'){
                        $sumaM[$key1] += $grade;
                        $indexM[$key1]++;
                        $vidurkisM[$key1] = $sumaM[$key1] / $indexM[$key1];

                    }
                }
            }
    $gradesAverage[]=($vidurkisL[$key1] + $vidurkisA[$key1] + $vidurkisM[$key1])/3;
    var_dump($gradesAverage);
}
