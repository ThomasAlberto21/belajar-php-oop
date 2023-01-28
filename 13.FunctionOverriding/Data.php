<?php

// Todo Function Overriding
// * Function overriding adalah kemampuan mendeklarasikan ulang function di child class, yang sudah ada di parent class
// * Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yang di class parent tidak bisa diakses lagi
// * Void (syntax yang digunakan untuk memberi tahu jika fungsi tidak mengembalikan nilai)




class Presiden
{
    var string $nama;

    function sayHello(string $nama): void
    {
        echo "Hi $nama nama saya $this->nama ,  saya adalah presiden republik indonesia" . PHP_EOL;
    }
}



class WakilPresiden extends Presiden
{
    function sayHello(string $nama): void
    {
        echo "Hi $nama nama saya $this->nama , saya adalah wakil presiden republik indonesia" . PHP_EOL;
    }
}
