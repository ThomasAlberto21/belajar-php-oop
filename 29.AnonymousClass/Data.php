<?php


// Todo Anonymous Class
// * Anonymous class atau class tanpa nama.
// * Adalah kemampuan mendeklarasikan class, sekaligus meng-instansiasi object-nya secara langsung
// * Anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi interface atau abstract class sederhana, tanpa harus membuat implementasi class nya


// Todo Constructor di Anonymous Class
// * Anonymous class juga mendukung constructor
// * Jadi kita bisa menambahkan constructor jika kita mau


interface HelloWorld
{
    function sayHello(): void;
}


$helloWorld = new class ("Thomas") implements HelloWorld
{

    public string $name;


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};


$helloWorld->sayHello();
