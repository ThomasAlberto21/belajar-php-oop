<?php

// Todo Magic Function
// * Magic function adalah function-function yang sudah ditentukan kegunaannya di PHP
// * Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya
// * Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai constructor, __destruct() sebagai destructor, dan __clone() sebagai object cloning
// * Masih banyak magic function lainnya, kita bisa melihatnya di link berikut : https://www.php.net/manual/en/language.oop5.magic.php 


// Todo __debugInfo() Function
// * Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
// * Function var_dump() sebenarnya memanggil function __debugInfo() 
// * Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()





class Student
{
    public string $id;
    public string $name;
    public int $value;

    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "author" => "Thomas Alberto",
        ];
    }
}



$student1 = new Student();
$student1->id = "1";
$student1->name = "Thomas";
$student1->value = 100;
var_dump($student1);