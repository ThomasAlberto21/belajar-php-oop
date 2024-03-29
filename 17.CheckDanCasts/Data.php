<?php

// Todo Type Check & Casts
// * Sebelumnya kita sudah tau cara melakukan konversi tipe data bukan class
// * Khusus untuk tipe data object, kita tidak perlu melakukan konversi secara eksplisit
// * Namun agar aman, sebelum melakukan casts, pastikan kita melakukan type check (pengecekan tipe data), dengan menggunakan kata kunci instanceof
// * Hasil operator instanceof adalah boolean, true jika tipe data sesuai, false jika tidak sesuai



class Programmer
{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}


class BackendProgrammer extends Programmer
{
}


class FrontendProgrammer extends Programmer
{
}


class Company
{
    public Programmer $programmer;
}


function sayHelloProgrammer(Programmer $programmer)
{

    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
