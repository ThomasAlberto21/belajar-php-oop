<?php

// Todo Overloading
// * Overloading adalah kemampuan secara dinamis membuat properties atau function
// * Ini mirip meta programming di bahasa pemrograman lain seperti Ruby
// * Namun ini berbeda dengan function overloading di bahasa pemrograman lain seperti Java
// * Overloading ini erat kaitannya dengan magic function yang sebelumnya sudah kita bahas


// Todo Function Overloading
// * Saat kita mengakses function, maka secara otomatis function akan diakses
// * Namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan itu error
// * PHP akan melakukan fallback ke magic function
// * Dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic function tersebut
// * Ada beberapa magic function yang bisa kita gunakan untuk function overloading



// Todo Magic Function untuk Function Overloading
// * __call ( $name , $arguments ) : mixed                  | Dieksekusi ketika memanggil function yang tidak tersedia
// * static __callStatic ( $name , $arguments ) : mixed     | Dieksekusi ketika memanggil static function yang tidak tersedia



class Zero
{
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static Function $name with arguments $join" . PHP_EOL;
    }
}


$zero = new Zero();

// ! __call
$zero->sayHello("Thomas", "Alberto");

// ! __callStatic
Zero::sayHello("Thomas", "Alberto");