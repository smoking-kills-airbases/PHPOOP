<?php

namespace Classes;

use Interfaces\TotalCalculatorInterface;

class StandardPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice($items)
    {
        $totalPrice = 0;
        foreach ($items as $item) {
            $totalPrice = array_sum($item->price);
        }
        return $totalPrice;
    }
}