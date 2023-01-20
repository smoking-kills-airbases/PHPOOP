<?php

include_once "Interfaces/TotalCalculatorInterface.php";

include_once "Classes/CinemaTicket.php";
include_once "Classes/StandardPriceCalculator.php";
include_once "Classes/SubscriberPriceCalculator.php";
include_once "Classes/NewCustomerPriceCalculator.php";

$ticket = new \Classes\CinemaTicket('The Movie', 'Berlin', new DateTime('2023-05-12 20:00:00'), 29.95);
//$ticket2 = new \Classes\CinemaTicket();

var_dump($ticket);