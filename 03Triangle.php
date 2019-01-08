<!DOCTYPE html>
<html>
<head>
    <title>Triangle area</title>
</head>

<body>
<?php
//trikampio krastines
$a=3;
$b=4;
$c=5;

if($a < $b + $c && $b < $a + $c && $c < $a + $b){
if($a == $b && $b!=$c || $b == $c && $c!=$a || $a== $c && $c!=$b) {
echo "Lygiasonis";
}
else if($a== $b && $a == $c){
echo "Lygiakrastis";
}
else if($a != $b && $a !=$c && $b != $c){
echo "Ivairiakrastis";
}
}
else
echo "Nesusidaro trikampis";

//ploto apskaiciavimas
$hp=($a + $b + $c)/2;
$area=sqrt($hp*($hp-$a)*($hp-$b)*($hp-$c));

echo "<br><br>";
echo " Trikampio plotas " . $area;
?>
</body>

</html>




