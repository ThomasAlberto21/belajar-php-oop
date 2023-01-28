<?php

// Todo Constructor Overriding
// * Karena constructor sama seperti function, maka constructor-pun bisa kita deklarasikan ulang di class Child nya
// * Sebenarnya di PHP, kita bisa meng-override function dengan arguments yang berbeda, namun sangat tidak disarankan
// * Jika kita melakukan override function dengan arguments berbeda, maka PHP akan menampilkan WARNING
// * Namun berbeda dengan constructor overriding, kita boleh meng-override dengan mengubah arguments nya, namun direkomendasikan untuk memanggil parent constructor




class Presiden
{
    var string $nama;
    var string $title;

    public function __construct(string $nama = "" , string $title = "Presiden")
    {
        $this->nama = $nama;
        $this->title = $title;
    }


    function sayHello(string $nama): void
    {
        echo "Hi $nama nama saya $this->nama ,  saya adalah $this->title republik indonesia" . PHP_EOL;
    }
}



class WakilPresiden extends Presiden
{

    public function __construct(string $nama = "")
    {
        parent::__construct($nama , "Wakil Presiden");
    }



    function sayHello(string $nama): void
    {
        echo "Hi $nama nama saya $this->nama , saya adalah $this->title republik indonesia" . PHP_EOL;
    }
}
