<!DOCTYPE html>
<html>
<head>
    <title>Masyvai</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
//atspausdinti nesikartojancias vardu poras
//?

//atspausdinti ir pasikartojancias vardu pora
//$a = array(‘Jonas’, ‘Petras’, ‘Antanas’, ‘Povilas’);
//var_dump($a);
//function combination($a){
//    $nameCouple= array();
//    foreach ($a as $name) {
//        foreach ($a as $secondName) {
//            if ($name != $secondName || $name = $secondName) {
//                array_push($nameCouple, $name . ' - ' . $secondName. ' , ');
//           }
//        }
//    }
//    return $nameCouple;
//
//}
//
//$pairs = combination($a);
//foreach($pairs as $pair) {
//    echo $pair;
//}

$a = array(
        array(1, 3, 4),
        array(2, 5),
        array(2 => 3, 5=> 8),
        array(1, 1, 5 => 1)
);
var_dump ($a);
function sum($a)
{
    $sumArray = array();
    foreach ($a as $k => $subArray) {
        foreach ($subArray as $key => $value) {
            $sumArray[$key] += $value;
        }
    }
    print_r($sumArray);
    echo"<br>Didziausia suma yra ".(max($sumArray));
}
sum($a);





//$sumArray=array();
//for ($i=0;$i<count($a);$i++ ){
//    foreach($a[$i] as $value=>$key){
//    $sumArray[$i]+=$key;
//    }
//}
//print_r($sumArray);


//function array_mesh() {

//    $numargs = func_num_args();
//    $arg_list = func_get_args();
//    $out = array();
//
//    for ($i = 0; $i < $numargs; $i++) {
//        foreach($in as $key => $value) {
//
//            if(array_key_exists($key, $out)) {
//             $sum = $in[$key] + $out[$key];
//                $out[$key] = $sum;
//            }else{
//            $out[$key] = $in[$key];
//            }
//        }
//    }
//
//    return $out;
//}
//echo "<pre>";
//
//print_r(array_mesh($a));
//echo "</pre>";
//

//
//function sumArray(){
//    $out = array();
//    $in = array();
//    foreach ($a as $k=>$in){
//        foreach ($in as $key => $value) {
//            if (array_key_exists($key, $out)) {
//                $sum = $in[$key] + $out[$key];
//                $out[$key] = $sum;
//            }
//            else{
//                $out[$key]=$in[$key];
//            }
//        }
//    }
//    return $out;
//}
//print_r(sumArray($a));

?>
</body>
</html>