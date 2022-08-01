<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shapeKosongan = new Shape();
echo $shapeKosongan->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;

