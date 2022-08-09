<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name == "Novin";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(1, 2, 3, 4, 5);
echo $result . PHP_EOL;

