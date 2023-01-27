<?php

// Todo Constructor
// * Saat kita membuat Object, maka kita seperti memanggil sebuah function, karena kita menggunakan kurung ()
// * Di dalam class PHP, kita bisa membuat constructor, constructor adalah function  yang akan dipanggil saat pertama kali Object dibuat.
// * Mirip seperti di function, kita bisa memberi parameter pada constructor
// * Nama constructor di PHP haruslah __construct()


class Person
{

    var string $nama;
    var int $nim;
    var string $kelas;


    // ! KARENA KITA SUDAH MEMAKAI FUNGSI CONSTRUCTOR MAKA PEMANGGILAN CLASS DI FOLDER LAIN PUN HARUS DIMASUKKAN 3 PARAMETER
    function __construct(string $nama, int $nim, string $kelas)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->kelas = $kelas;

        echo "Nama \t : $nama" . PHP_EOL;
        echo "Nim \t : $nim" . PHP_EOL;
        echo "Kelas \t : $kelas" . PHP_EOL;
    }
}





