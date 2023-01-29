<?php

require_once "Data.php";

$company = new Company();

$company->programmer = new Programmer("Thomas");
var_dump($company);

$company->programmer = new BackendProgrammer("Eko");
var_dump($company);

$company->programmer = new FrontendProgrammer("Budi");
var_dump($company);



sayHelloProgrammer(new Programmer("Thomas"));
sayHelloProgrammer(new BackendProgrammer("Eko"));
sayHelloProgrammer(new FrontendProgrammer("Budi"));