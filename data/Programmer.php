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
    echo "Hai Programmer $programmer->name" . PHP_EOL;
}
