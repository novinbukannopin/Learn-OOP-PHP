<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Novin");
$company->programmer = new BeProgrammer("Novin");
$company->programmer = new FeProgrammer("Novin");


sayHelloProgrammer(new Programmer("Novin"));
sayHelloProgrammer(new BeProgrammer("Novin"));
sayHelloProgrammer(new FeProgrammer("Novin"));