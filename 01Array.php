<?php
$numbers= [
    [3,4,6,4],
    [5,6,2,1],
    [1,4,7,4]
];
$sum1=$numbers[0][0]+$numbers[1][0]+$numbers[2][0];
$sum2=$numbers[0][1]+$numbers[1][1]+$numbers[2][1];
$sum3=$numbers[0][2]+$numbers[1][2]+$numbers[2][2];
echo $sum1."\n";
echo $sum2."\n";
echo $sum3."\n";

echo max($sum1,$sum2,$sum3);

//function calculateDiagonal($array) {
//    $length = count($array);
//    $primary = 0;
//    $secondary = 0;
//    for ($i = 0; $i < $length; $i++):
//        for ($j = 0; $j < $length; $j++):
//            if ($i == $j):
//                $primary += $array[$i][$j];
//            endif;
//        endfor;
//    endfor;
//    $totalSum = $primary + $secondary;
//    return $totalSum;
//}