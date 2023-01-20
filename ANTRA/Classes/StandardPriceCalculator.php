<?php

namespace Classes;

use Interfaces\TotalCalculatorInterface;



class StandardPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice($items): float
    {
        $totalPrice = 0;
        foreach ($items as $item) {
            $totalPrice += $item->getPrice();
        }
        return $totalPrice;
    }
}