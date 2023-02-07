<?php

// Todo Trait
// * Selain class dan interface, di PHP terdapat feature lain bernama trait
// * Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function
// * Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu
// * Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class dengan trait
// * Secara sederhana trait digunakan untuk menyimpan function-function yang bisa digunakan ulang di beberapa class
// * Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use



// Todo Trait Properties
// * Berbeda dengan interface, di trait, kita bisa menambahkan properties
// * Dengan menambahkan properties, secara otomatis class tersebut akan memiliki properties yang ada di trait


namespace Data\Traits;

trait sayGoodBye
{
    function sayGoodBye(string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}



trait hello
{
    function hello(string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}


trait hasName
{
    public string $name;
}


class Person
{
    use sayGoodBye, hello , hasName;
}
