<?php


// Todo Properties vs Constant
// * Saat kita membuat object, properties yang terdapat di class akan secara otomatis dibuat per object, oleh karena itu untuk mengakses properties, kita perlu menggunakan object, atau jika dari dalam object tersebut sendiri, kita perlu menggunakan kata kunci this
// * Sedangkan berbeda dengan constant, constant di class tidak akan dibuat per object. Constant itu hidupnya di class, bukan di object, oleh karena itu untuk mengaksesnya kita perlu menggunakan NamaClass::NAMA_CONSTANT
// * Secara sederhana, properties akan dibuat satu per instance class (object), sedangkan constant dibuat satu per class



// Todo Self Keyword
// * Jika di dalam class (misal di function) kita ingin mengakses constant, kita perlu mengakses menggunakan NamaClass::NAMA_CONSTANT
// * Namun jika di dalam class yang sama, kita bisa menggunakan kata kunci self untuk mempermudah


class Person
{
    const NAMA = "Thomas Alberto";
    const NIM = 12221355;
    const KELAS = "12.1B.30";


    function sayHello()
    {
        echo "Nama \t : " . self::NAMA . PHP_EOL;
        echo "Nim \t : " . self::NIM . PHP_EOL;
        echo "Kelas \t : " . self::KELAS . PHP_EOL;
    }
}