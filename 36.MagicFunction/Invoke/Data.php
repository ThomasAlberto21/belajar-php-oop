<?php

// Todo Magic Function
// * Magic function adalah function-function yang sudah ditentukan kegunaannya di PHP
// * Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya
// * Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai constructor, __destruct() sebagai destructor, dan __clone() sebagai object cloning
// * Masih banyak magic function lainnya, kita bisa melihatnya di link berikut : https://www.php.net/manual/en/language.oop5.magic.php 



// Todo __invoke() function
// * __invoke() merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai function
// * Misal ketika kita membuat object $student, lalu kita melakukan $student(), maka secara otomatis function __invoke() yang akan dieksekusi


class Student
{
    public string $id;
    public string $name;
    public int $value;

    public function __invoke(...$arguments)
    {
        $join = join("," , $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }
}



$student1 = new Student();
$student1->id = "1";
$student1->name = "Thomas";
$student1->value = 100;
$student1("Thomas" , "Alberto" , 2);