<?php


require_once "Data.php";

$presiden = new Presiden();
$presiden->nama = "Jokowi";
$presiden->sayHello("Maaruf amin");

$wakilPresiden = new wakilPresiden();
$wakilPresiden->nama ="Maaruf Amin";
$wakilPresiden->sayHello("Jokowi");