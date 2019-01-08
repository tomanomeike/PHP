<!DOCTYPE html>
<html>
    <head>
        <title>Trikapiu uzduotis</title>
        <meta charset="UTF-8">
    </head>
<body>
<?php
$data=[
    [3,4,5],
    [2,10,8],
    [5,6,5],
    [5,5,5]
];
for($i=0; $i<count($data);$i++){
    $tr=$data[$i];
    echo "<br> $tr[0], $tr[1], $tr[2]: ";
    if( $tr[0] + $tr[1] > $tr[2] &&
        $tr[0] + $tr[2] > $tr[1] &&
        $tr[1] + $tr[2] > $tr[0]
    ){
        if($tr[0] == $tr[1] && $tr[1] == $tr[2]){
            echo "Lygiakrastis";
        }
        else if($tr[0] == $tr[1] || $tr[0] == $tr[2] || $tr[1] == $tr[2]){
            echo "Lygiakrastis";
        }
        else {
            echo "Ivairiasonis";
        }
        $pp = ($tr[0] + $tr[1] + $tr[2]) / 2;
        $plotas = sqrt($pp * ($pp - $tr[0]) * ($pp - $tr[1]) * ($pp - $tr[2]));

        echo ", plotas: ". round($plotas, 1);
    }


    else{
        echo "Trikampis nesusidaro";
    }
}
?>
</body>
</html>