<?php

// Todo Interface Inheritance
// * Sebelumnya kita sudah tahu kalo di PHP, child class hanya bisa punya 1 class parent
// * Namun berbeda dengan interface, sebuah child class bisa implement lebih dari 1 interface
// * Bahkan interface pun bisa implement interface lain, bisa lebih dari 1. Namun jika interface ingin mewarisi interface lain, kita menggunakan kata kunci extends, bukan implements


namespace Data {

    interface hasBrand
    {
        function getBrand();
    }

    interface isMaintenance
    {
        function isMaintenance();
    }


    interface Mobil extends hasBrand, isMaintenance
    {
        function drive();

        function getDrive();
    }



    class Toyota implements Mobil
    {

        function drive()
        {
            echo "Drive Toyota" . PHP_EOL;
        }

        function getDrive()
        {
            return 4;
        }

        function getBrand()
        {
            echo "Toyota" . PHP_EOL;
        }

        function isMaintenance()
        {
            return 5;
        }
    }
}
