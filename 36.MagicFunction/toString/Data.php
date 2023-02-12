<?php

// Todo Magic Function
// * Magic function adalah function-function yang sudah ditentukan kegunaannya di PHP
// * Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya
// * Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai constructor, __destruct() sebagai destructor, dan __clone() sebagai object cloning
// * Masih banyak magic function lainnya, kita bisa melihatnya di link berikut : https://www.php.net/manual/en/language.oop5.magic.php 


// Todo __toString() Function
// * __toString() function merupakan salah satu magic function yang digunakan sebagai representasi string sebuah object
// * Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()





class Student
{
    public string $id;
    public string $name;
    public int $value;

    public function __toString()
    {
        return "Student Id : $this->id , Student Name : $this->name , Student Value : $this->value" . PHP_EOL;
    }
}


$student1 = new Student();
$student1->id = "1";
$student1->name = "Thomas";
$student1->value = 100;

echo $student1 . PHP_EOL;
