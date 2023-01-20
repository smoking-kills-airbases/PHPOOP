<?php

include_once "Interfaces/TotalCalculatorInterface.php";

include_once "Classes/CinemaTicket.php";
include_once "Classes/StandardPriceCalculator.php";
include_once "Classes/SubscriberPriceCalculator.php";
include_once "Classes/NewCustomerPriceCalculator.php";

$ticket1 = new \Classes\CinemaTicket('Movie1', 'Location1', new DateTime('2023-01-01'), 15);
$ticket2 = new \Classes\CinemaTicket('Movie2', 'Location2', new DateTime('2023-02-02'), 11);
$ticket3 = new \Classes\CinemaTicket('Movie3', 'Location3', new DateTime('2023-03-03'), 8);
//$ticket2 = new \Classes\CinemaTicket();

var_dump($ticket1);