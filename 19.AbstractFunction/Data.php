<?php


// Todo Abstract Function
// * Saat kita membuat class yang abstract, kita bisa membuat abstract function juga di dalam class abstract tersebut
// * Saat kita membuat sebuah abstract function, kita tidak boleh membuat block function untuk function tersebut
// * Artinya, abstract function wajib di override di class child
// * Abstract function tidak boleh memiliki access modifier private



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
