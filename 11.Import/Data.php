<?php

// Todo Import
// * Sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant di namespace kita perlu menyebutkan nama namespace nya di awal
// * Jika terlalu sering menggunakan class, function atau constant yang sama, maka terlalu banyak duplikasi dengan menyebut namespace yang sama berkali-kali
// * Hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan menggunakan kata kunci use


namespace Data\One {
    class Conflict
    {
        var string $nama;

        function sayHello($nama)
        {
            echo "Hello $nama" . PHP_EOL;
        }
    }
}

namespace Data\Two {
    class Conflict
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

    const SAYGOODBYE = "Thank You Thomas" . PHP_EOL;
}
