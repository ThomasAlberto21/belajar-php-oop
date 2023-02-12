<?php


// Todo Overloading
// * Overloading adalah kemampuan secara dinamis membuat properties atau function
// * Ini mirip meta programming di bahasa pemrograman lain seperti Ruby
// * Namun ini berbeda dengan function overloading di bahasa pemrograman lain seperti Java
// * Overloading ini erat kaitannya dengan magic function yang sebelumnya sudah kita bahas



// Todo Properties Overloading
// * Saat kita mengakses properties, maka secara otomatis properties akan diakses
// * Namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan itu error
// * PHP akan melakukan fallback ke magic function terlebih dahulu
// * Dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic function tersebut
// * Ada beberapa magic function yang bisa kita gunakan untuk properties overloading




// Todo Magic Function Untuk Properties Overloading
// * __set($name, $value) : void   | Dieksekusi ketika mengubah properties yang tidak tersedia
// * __get($name) : mixed          | Dieksekusi ketika mengakses properties yang tidak tersedia
// * __isset ($name ) : bool       | Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
// * __unset($name) : void         | Dieksekusi ketika menggunakan unset() properties yang tidak tersedia



class Zero
{
    private array $properties = [];

    // Todo set untuk mengubah data berdasarkan properties nya
    public function __set($name, $value): void
    {
        $this->properties[$name] = $value;
    }

    // Todo Get untuk mengambil data berdasarkan properties nya
    public function __get($name)
    {
        return $this->properties[$name];
    }

    // Todo isset untuk mengecek apakah data nya sudah di set berdasarkan properties nya
    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    // Todo unset untuk mengecek apakah data nya sudah di unset berdasarkan properties nya
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }
}


$zero = new Zero();
$zero->firstName = "Thomas";
$zero->lastName = "Alberto";


echo "Firstname : $zero->firstName" . PHP_EOL;
echo "lastname : $zero->lastName" . PHP_EOL;
