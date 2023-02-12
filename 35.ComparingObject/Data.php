<?php

// Todo Comparing Object / Perbandingan Object
// * Sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan operator == (equals) dan === (identity)
// * Operator == (equals) membandingkan semua properties yang terdapat di object tersebut, dan tiap properties juga akan dibandingkan menggunakan operator == (equals)
// * Sedangkan operator === (identity), maka akan membandingkan apakah object identik, artinya mengacu ke object yang sama




class Student
{
    public string $id;
    public string $name;
    public int $value;

    public function __clone()
    {
        unset($this->value);
    }
}



$student1 = new Student();
$student1->id = "1";
$student1->name = "Thomas";
$student1->value = 100;


$student2 = new Student();
$student2->id = "1";
$student2->name = "Thomas";
$student2->value = 100;

var_dump($student1 == $student2);

// * Kenapa False , karena dua object tersebut berbeda
var_dump($student1 === $student2);
