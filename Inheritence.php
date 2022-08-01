<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "novin";
$manager->sayHello("Budi");

$vp = new VicePresident();
$vp->name = "joko";
$vp->sayHello("udin");
