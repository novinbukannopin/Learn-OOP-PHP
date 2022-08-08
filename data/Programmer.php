<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class FeProgrammer extends Programmer
{

}

class BeProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BeProgrammer) {
        echo "Hello Backend $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FeProgrammer) {
        echo "Hello Frontend $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello $programmer->name" . PHP_EOL;
    }
}
