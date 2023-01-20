<?php

include_once "Interfaces/TotalCalculatorInterface.php";

include_once "Classes/CinemaTicket.php";
include_once "Classes/StandardPriceCalculator.php";
include_once "Classes/SubscriberPriceCalculator.php";
include_once "Classes/NewCustomerPriceCalculator.php";
include_once "Classes/OrderProcessor.php";

$ticket1 = new \Classes\CinemaTicket('Movie1', 'Location1', new DateTime('2023-01-01'), 15);
$ticket2 = new \Classes\CinemaTicket('Movie2', 'Location2', new DateTime('2023-02-02'), 10.5);
$ticket3 = new \Classes\CinemaTicket('Movie3', 'Location3', new DateTime('2023-03-03'), 7);


$standardCalculator = new \Classes\StandardPriceCalculator();
$subscriberCalculator = new \Classes\SubscriberPriceCalculator();
$newCustomerCalculator = new \Classes\NewCustomerPriceCalculator();

$orderProcessor1 = new \Classes\OrderProcessor($standardCalculator);
$orderProcessor1->addItem($ticket1);
$orderProcessor1->addItem($ticket2);
$orderProcessor1->addItem($ticket3);

$orderProcessor2 = new \Classes\OrderProcessor($subscriberCalculator);
$orderProcessor2->addItem($ticket1);
$orderProcessor2->addItem($ticket2);
$orderProcessor2->addItem($ticket3);

$orderProcessor3 = new \Classes\OrderProcessor($newCustomerCalculator);
$orderProcessor3->addItem($ticket1);
$orderProcessor3->addItem($ticket2);
$orderProcessor3->addItem($ticket3);

echo "Order processor 1 total price: " . $orderProcessor1->calculatePrice() . " EUR" . PHP_EOL;
echo "Order processor 2 total price: " . $orderProcessor2->calculatePrice() . " EUR" . PHP_EOL;
echo "Order processor 3 total price: " . $orderProcessor3->calculatePrice() . " EUR" . PHP_EOL;

//var_dump($orderProcessor1);
