<?php

namespace Classes;

class OrderProcessor extends StandardPriceCalculator
{
    public array $items;
    public $calculator;

    public function __construct($calculator)
    {
        $this->items = array();
        $this->calculator = $calculator;
    }

    public function addItem($ticket)
    {
        array_push($this->items, $ticket);
    }

    public function getList(): array
    {
        return $this->items;
    }

    public function calculatePrice($items): float
    {
        return $this->calculator->calculatePrice($this->items);
    }
}