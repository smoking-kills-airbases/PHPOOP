<?php

namespace Classes;
use \Datetime;


class CinemaTicket
{
    private string $movieTitle;
    private string $location;
    private $sessionTime;
    private float $price;

    public function __construct(string $movieTitle, string $location, Datetime $sessionTime, float $price)
    {
        $this->movieTitle = $movieTitle;
        $this->location = $location;
        $this->sessionTime = $sessionTime;
        $this->price = $price;
    }
}