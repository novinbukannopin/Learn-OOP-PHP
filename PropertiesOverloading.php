<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }


    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "echo fn with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "echo call static fn with arguments $join" . PHP_EOL;
    }

}

// ketika object tidak memiliki propertis, __get() akan dipanggil
$zero = new Zero();
//echo $zero->firstName . PHP_EOL;

//$zero->firstName = "NOVIN";
//unset($zero->firstName);
$zero->firstName = "novin";
$zero->middleName = "ardian";

echo "fn : $zero->firstName" . PHP_EOL;
echo "mn : $zero->middleName" . PHP_EOL;

$zero->sayHello("novin", "ardian");
Zero::sayHello("novin", "ardian");