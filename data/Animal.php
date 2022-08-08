<?php

namespace data;

abstract class Animal
{
    public string $name;

    abstract function run(): void;
}

class Cat extends Animal
{

    function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal{

    function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}
