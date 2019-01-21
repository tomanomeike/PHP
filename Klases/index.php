<?php
/**
 * Created by PhpStorm.
 * User: toman
 * Date: 2019-01-16
 * Time: 11:12
 */
require_once "car.php";

$cars = [
    new Car (2018, "ABC123", 1000, 10),
    new Car (2018, "ABD123", 1000, 10),
    new Car (2019, "ABR123", 1000, 10),
    new Car (2019, "ABC123", 1000, 10)
];
usort ($cars, function ($a,$b){
    return Car::speed($b) <=> Car::speed($a);
});