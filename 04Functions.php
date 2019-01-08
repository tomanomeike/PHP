<!DOCTYPE html>
<html>
    <head>
        <title>Funkcijos</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
        $a = array(5, 6, 10, 15);
        $b = array(8, 5, 3, 25);
    function average($array) {
        return array_sum($array) / count($array);
    }
        echo "Pirmo masyvo vidurkis: ". average($a);
        echo "<br>";
        echo"Antro masyvo vidurkis: " . average($b);

    function skirtumas($a,$b){
        return average($a)-average($b);
    }
        echo "<br> Masyvu skirtumas: ".skirtumas($a, $b);



    //antras uzdavinys

    function perfectNumber(){
        for($n=1;$n<=1000;$n++){  //einam per kiekviena skaiciu iki 1000
            $sum=0;
            for($i=1; $i<=$n/2;$i++){
                if($n % $i == 0){
                    $sum+=$i;     //skaiciuojam dalikliu suma
                }
            }
            if($sum==$n){
                echo "<br> Tobulas skaicius yra: ".$n;
            }
        }
    }
    perfectNumber();
    ?>
    </body>
</html>