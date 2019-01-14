<?php
/**
 * Created by PhpStorm.
 * User: toman
 * Date: 2019-01-14
 * Time: 13:19
 */
class Zmogus
{
    public $vardas;
    public $pavarde;
    public $amzius;

    function __construct($vardas, $pavarde, $amzius){
        $this->vardas=$vardas;
        $this->pavarde=$pavarde;
        $this->amzius=$amzius;
    }
}

//$zmogus1= new Zmogus("Jonas", "Jonaitis",30);
//$zmogus2= new Zmogus("Petras", "Petraitis", 40);
//$zmogus3= new Zmogus("Ona", "Onaite", 20);

//$zmone=[$zmogus1, $zmogus2, $zmogus1];

// paprasciau sudeti viska is karto i masyva

$zmones=[new Zmogus("Jonas", "Jonaitis",30),
    new Zmogus("Petras", "Petraitis", 40),
    new Zmogus("Ona", "Onaite", 20)
];

foreach ($zmones as $a){
    echo "<br>" . $a->vardas;
}

var_dump ($zmones);