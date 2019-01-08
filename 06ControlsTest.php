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