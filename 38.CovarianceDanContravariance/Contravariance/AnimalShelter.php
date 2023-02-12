<?php

// Todo Covariance
// * Saat kita meng override function dari parent class, biasanya di child class kita akan membuat function yang sama dengan function yang di parent
// * Covariance memungkinkan kita meng override return function yang di parent dengan return value yang lebih spesifik



namespace Data;

require_once "Animal.php";


interface AnimalShelter
{
    function adopt(string $name): Animal;
}


class CatShelter implements AnimalShelter
{
    function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}


class DogShelter implements AnimalShelter
{
    function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
