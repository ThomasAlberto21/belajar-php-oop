<?php


// Todo Function
// * Selain menambahkan properties, kita juga bisa menambahkan function ke object
// * Cara mendeklarasikan function tersebut harus di dalam block class
// * Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
// * Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama method nya. Sama seperti mengakses properties



class Person
{
    var string $name;
    var string $address;
    var string $country;

    
    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}
