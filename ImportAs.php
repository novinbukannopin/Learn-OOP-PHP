<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\one\Conflict as conflict1;
use data\two\Conflict as conflict2;

use function  Helper\helpMe as help;
use const Helper\VERSION as VER;

$con1 = new conflict1();
$con2 = new conflict2();

help();
echo VER . PHP_EOL;

