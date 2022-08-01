<?php

require_once "data/Manager.php";

//$manager = new Manager();
//$manager->name = "Novin";
//$manager->sayHello("Izza");
//
//$vp = new VicePresident();
//$vp->name = "terserah";
//$vp->sayHello("woi");

$manager = new Manager("Novin");
$manager->sayHello("Izza");

$vp = new VicePresident("Izza");
$vp->sayHello("Novin");
