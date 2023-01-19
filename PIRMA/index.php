<?php


include_once "Employee.php";
include_once "Intern.php";
include_once "Manager.php";


$employee = new Employee('Vytautas Antanauskas', 1190);
$intern = new Intern('Petras Audrauskas', 900);
$manager = new Manager('Tomas Kestauskas', 1600, 8);

//var_dump($intern);
//var_dump($manager);

var_dump($intern->calculateSalary());
var_dump($manager->calculateSalary());

echo Intern::getTypeDescription();
echo Manager::getTypeDescription();

$intern2 = clone $intern;
var_dump($intern2);



