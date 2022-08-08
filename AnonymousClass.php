<?php

interface HelloWorld
{
    function sayHello(): void;
}

$novin = new class("Novin") implements HelloWorld {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$novin->sayHello();
