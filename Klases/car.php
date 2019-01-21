<?php
/**
 * Created by PhpStorm.
 * User: toman
 * Date: 2019-01-16
 * Time: 11:13
 */
class Car
{
public $date;
public $number;
public $distance;
public $seconds;

function __construct($date, $number, $distance, $seconds)
{
    $this->date=$date;
    $this->number=$number;
    $this->distance=$distance;
    $this->seconds=$seconds;
}
    function speed(){
        return $this->distance/$this->seconds;
}
}

