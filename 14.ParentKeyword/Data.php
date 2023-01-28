<?php

// Todo Parent Keyword
// * Kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita override di class child
// * Untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent
// * Sederhananya, parent digunakan untuk mengakses class parent


namespace Data {

    class Shape
    {
        public function getCorner()
        {
            return 0  . PHP_EOL;
        }
    }


    class Rectangle extends Shape
    {
        public function getCorner()
        {
            return 4 . PHP_EOL;
        }


        public function getParentCorner()
        {
            return parent::getCorner();
        }
    }

}
