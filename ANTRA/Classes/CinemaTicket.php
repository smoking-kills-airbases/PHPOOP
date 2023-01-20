<?php

namespace Classes;
use \Datetime;


class CinemaTicket
{
    public string $movieTitle;
    public string $location;
    public ?DateTime $sessionTime;
    public float $price;

    public function __construct(string $movieTitle, string $location, DateTime $sessionTime, float $price)
    {
        $this->movieTitle = $movieTitle;
        $this->location = $location;
        $this->sessionTime = $sessionTime;
        $this->price = $price;
    }
}