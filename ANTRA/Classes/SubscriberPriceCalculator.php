<?php

namespace Classes;

use Interfaces\TotalCalculatorInterface;

class SubscriberPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice($items): float
    {
        $totalPrice = 0;
        foreach ($items as $item) {
            $totalPrice += ($item->getPrice() - ($item->getPrice() * 0.1));
        }
        return $totalPrice;
    }
}