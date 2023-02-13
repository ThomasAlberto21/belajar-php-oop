<?php

// Todo Regular Expression
// * PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman Perl
// * Regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string menggunakan pola tertentu
// * Materi ini sebenarnya materi yang sangat panjang, sehingga disini kita akan bahas sedikit pengenalannya
// * Untuk pembuatan pattern di regular expression, detailnya bisa dibaca disini : https://www.php.net/manual/en/pcre.pattern.php 



// Todo Function Regular Expression
// * preg_match ($pattern ,$subject) preg_match_all ($pattern ,$subject)  | Digunakan untuk mencari match pattern
// * preg_replace ( $pattern , $replacement, $subject) | Digunakan untuk mereplace semua pattern dengan replacement
// * preg_split ( $pattern , $subject)  | Digunakan untuk memotong dengan pattern menjadi array


// ! Preg match All
$matches = [];
$results = (bool) preg_match_all("/Thomas|Alberto/i", "Thomas Alberto", $matches);
var_dump($results);


// ! Preg Raeplace
$results = preg_replace("/anjing|bangsat/i", "***", 'Dasar Lu anjing bangsat');
var_dump($results);


// ! Preg split
$results = preg_split("/[\s,-]/", "Thomas Alberto-Ganteng,keren");
var_dump($results);
