<?php

// Todo Object Cloning
// * Kadang kita ada kebutuhan untuk menduplikasi sebuah object
// * Biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua properties di object awal ke object baru
// * Untungnya PHP mendukung object cloning
// * Kita bisa menggunakan perintah clone untuk membuat duplikasi object
// * Secara otomatis semua properties di object awal akan di duplikasi ke object baru


// Todo __clone() Function
// * Kadang menyalin semua properties bukanlah yang kita inginkan
// * Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
// * Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class nya dengan nama function __clone()
// * Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
// * Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()



class Student
{
    public string $id;
    public string $name;
    public int $value;

    public function __clone()
    {
        unset($this->value);
    }
}



$student1 = new Student();
$student1->id = "1";
$student1->name = "Thomas";
$student1->value = 100;

// * Melakukan Cloning 
$student2 = clone $student1;

var_dump($student1);
var_dump($student2);