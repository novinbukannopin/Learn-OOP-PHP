<?php

require_once "data/Campus.php";

$novin = new Campus();
$novin->setName("Novin");
$novin->setActive(true);

echo "Nama      : {$novin->getName()}" . PHP_EOL;
echo "Active    : {$novin->isActive()}" . PHP_EOL;