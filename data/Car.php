<?php

namespace data;
interface Car extends Price
{
    function drive(): void;

    function getTire(): int;
}

interface Brand
{
    function getBrand(): void;
}

interface Price
{
    function getPrice(): int;
}

class Avanza implements Car, Brand
{

    function drive(): void
    {
        echo "Avanza is drive" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    public function getBrand(): void
    {
        echo "Toyota" . PHP_EOL;
    }

    public function getPrice(): int
    {
        return 1;
    }
}
