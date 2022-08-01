<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new \data\one\Conflict();
$conflict2 = new \data\two\Conflict();

echo Helper\VERSION;
Helper\helpMe();