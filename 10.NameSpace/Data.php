<?php


// Todo Namespace
// * Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
// * Jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan jenis-jenis class
// * PHP memiliki fitur namespace, dimana kita bisa menyimpan class-class kita di dalam namespace
// * Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu menyebutkan nama namespace nya
// * Namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace nama class sama tidak akan menjadikan error di PHP



// Todo Membuat Namespace
// * Untuk membuat namespace, kita bisa menggunakan kata kunci namespace
// * Jika kita ingin membuat sub namespace, kita cukup gunakan karakter \ setelah namespace sebelumnya



// Todo Function dan Constant di Namespace
// * Selain class, kita juga menggunakan function dan constant di namespace
// * Dan jika kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya dengan diawali dengan nama namespace nya



namespace Data\One {
    class Person
    {
        var string $nama;

        function sayHello($nama)
        {
            echo "Hello $nama" . PHP_EOL;
        }

    }
}


namespace Data\Two {
    class Person
    {
        var string $nama;

        function sayHello($nama)
        {
            echo "Hello $nama" . PHP_EOL;
        }

    }
}


namespace thankYou {


    function sayHello($nama)
    {
        echo "Hello $nama" . PHP_EOL;
    }

    const SAYGOODBYE = "Thank You" . PHP_EOL;
}
