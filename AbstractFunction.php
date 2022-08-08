<?php

require_once "data/Animal.php";

use data\{animal, cat, dog};

$catty = new cat();
$catty->name = "catty";
$catty->run();

$doggy = new dog();
$doggy->name = "dog";
$doggy->run();