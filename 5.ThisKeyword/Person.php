<?php

// Todo This Keyword
// * Saat kita membuat kode di dalam function di dalam class, kita bisa menggunakan kata kunci this untuk mengakses object saat ini
// * Misal kadang kita butuh mengakses properties atau function lain di class yang sama



class Person
{
    var string $name;


    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name my name is $this->name" . PHP_EOL;
        }
    }
}
