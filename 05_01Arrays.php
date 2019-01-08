<!DOCTYPE html>
<html>
<head>
    <title>Masyvai</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
$a = array(
    array(1, 3, 4),
    array(2, 5),
    array(2 => 3, 5=> 8),
    array(1, 1, 5 => 1)
);
var_dump ($a);

//destytojo

//function columns($a){
//    $max=-1;
//    foreach ($a as $value){
//        $maxkey=(max(array_keys($value)));
//        if($maxkey>$max) $max=$maxkey;
//    }
//    return$max+1;
//}
//echo columns($a);
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

?>
</body>
</html>