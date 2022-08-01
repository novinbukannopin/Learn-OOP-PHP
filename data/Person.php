<?php

class Person
{
    const AUTHOR = "Programmer Zaman Now";
    var ?string $name = null;
//  boleh null jika add ? sebelum type data
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }

//    TYPE JUGGLING
//    var $name;
//    var $address;
//    var $country;


    function sayHello(?string $name)
    {
        if (is_null($name)){
            echo "Hello, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info(){
//      echo "Author = " . Person::AUTHOR . PHP_EOL;
        echo "Author = " . self::AUTHOR . PHP_EOL;
    }

    public function __destruct()
    {
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
}
