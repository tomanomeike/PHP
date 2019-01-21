<?php
/**
 * Created by PhpStorm.
 * User: toman
 * Date: 2019-01-14
 * Time: 18:42
 */
class Mokinys
{
    public $vardas;
    public $pavarde;
    public $vidurkis;


    function __construct($vardas, $pavarde, $vidurkis)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->vidurkis = $vidurkis;

    }

}
$mokiniai=[new Mokinys("Jonas", "Jonaitis",6),
    new Mokinys("Petras", "Petraitis", 10),
    new Mokinys("Ona", "Onaite", 7)
];

//var_dump($mokiniai). "<br>" . $name->vardas . $vidurkis->vidurkis;

usort($mokiniai, function ($x,$y){
return $y-> vidurkis <=> $x -> vidurkis;
});
var_dump($mokiniai);
foreach ($mokiniai as $mokinys){
    echo"<br>" .  $mokinys->vardas;
    echo"<br>" . $mokinys->pavarde;
    echo "<br>" . $mokinys->vidurkis;
}