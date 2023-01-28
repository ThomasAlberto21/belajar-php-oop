<?php

require_once "Data.php";

// Todo Private
$product = new Product("Iphone" , 4500000);
echo "Nama Produk \t : " . $product->getName() .PHP_EOL;
echo "Harga Produk \t : " . $product->getPrice() .PHP_EOL;


// Todo Protected
$productVivo = new ProductVivo("Vivo Y12s" , 3000000);
$productVivo->productVivo();
