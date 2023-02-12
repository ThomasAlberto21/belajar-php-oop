<?php


// Todo Contravariance
// * Sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function argument yang lebih tidak spesifik dibandingkan parent nya



namespace Data;

require_once "Food.php";

abstract class Animal
{

    public string $name;

    abstract public function run();

    abstract public function eat(AnimalFood $animalFood): void;
}



class Cat extends Animal
{
    public function run()
    {
        echo "Cat $this->name sedang tidur" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat Is Eating" . PHP_EOL;
    }
}


// ! Contravariance
class Dog extends Animal
{
    public function run()
    {
        echo "Dog $this->name sedang makan" . PHP_EOL;
    }

    public function eat(Food $animalFood): void
    {
        echo "Dog Is Eating" . PHP_EOL;
    }
}
