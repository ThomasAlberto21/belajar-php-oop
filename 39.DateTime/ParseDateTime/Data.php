<?php

// Todo ParseDateTime
// * Selain format DateTime menjadi string, di PHP juga kita bisa melakukan hal sebaliknya, yaitu memparsing string menjadi DateTime sesuai dengan format yang kita mau
// * Untuk melakukan itu, kita bisa menggunakan static function createFromFormat() dari class DateTime



$date = DateTime::createFromFormat("Y-m-d H:i:s" , "2023-2-12 21:47:55",  new DateTimeZone("Asia/Jakarta"));
var_dump($date);