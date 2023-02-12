<?php


namespace Data;

abstract class Animal
{

    public string $name;

    abstract public function run();
}



class Cat extends Animal
{
    public function run()
    {
        echo "Cat $this->name sedang tidur" . PHP_EOL;
    }
}



class Dog extends Animal
{
    public function run()
    {
        echo "Dog $this->name sedang makan" . PHP_EOL;
    }
}
