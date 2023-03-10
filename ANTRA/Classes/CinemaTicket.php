<?php

namespace Classes;
use \Datetime;


class CinemaTicket
{
    private string $movieTitle;
    private string $location;
    private ?DateTime $sessionTime;
    private float $price;

    public function __construct(string $movieTitle, string $location, DateTime $sessionTime, float $price)
    {
        $this->movieTitle = $movieTitle;
        $this->location = $location;
        $this->sessionTime = $sessionTime;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}