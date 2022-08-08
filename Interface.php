<?php

require_once "data/Car.php";

use data\{Avanza};

$car1 = new Avanza();
$car1->drive();
$car1->getBrand();
echo $car1->getTire() . PHP_EOL;