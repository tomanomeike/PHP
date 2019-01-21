<?php
/**
 * Created by PhpStorm.
 * User: toman
 * Date: 2019-01-14
 * Time: 17:38
 */

class Mokinys
{
    public $trimestras;
    public $lietuviu;
    public $matematika;
    public $anglu;

    function __construct($lietuviu, $matematika, $anglu){
        $this->lietuviu=$lietuviu;
        $this->matematika=$matematika;
        $this->anglu=$anglu;
    }
}
$trimestras=[
    [‘lietuviu’ => 8,
    ‘matematika’ => 9,
    ‘anglu’ => 8]];

foreach ($trimestras as $lesson){
    foreach ($trimestras as $grade){
        $average=array_sum($grade)/count($grade);
    }
}

echo $average;
