<?php

// Todo Object Iteration
// * Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang terdapat di object tersebut menggunakan foreach
// * Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
// * Secara default, hanya properties yang public yang bisa diakses oleh foreach



// Todo Iterator
// * Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
// * Jika kita ingin menangani hal ini secara manual, kita bisa menggunakan Iterator
// * Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat Iterator secara manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan ArrayIterator, yaitu iterator yang menggunakan array sebagai data iterasi nya
// * Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface IteratorAggregate, disana kita hanya butuh meng-override function getIterator() yang mengembalikan data Iterator



class Data implements IteratorAggregate
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "forth";


    public function getIterator(): Traversable
    {
        return new ArrayIterator([
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth,
        ]);
    }
}

$data = new Data();
foreach ($data as $properti => $value) {
    echo "$properti : $value" . PHP_EOL;
}
