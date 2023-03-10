<?php

namespace Classes;

use Interfaces\TotalCalculatorInterface;

class NewCustomerPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice($items): float
    {
        $totalPrice = 0;
        $first = true;
        foreach ($items as $item) {
            if ($first) {
                $totalPrice += ($item->getPrice() - ($item->getPrice() * 0.2));
                $first = false;
            } else {
                $totalPrice += $item->getPrice();
            }
        }
        return $totalPrice;
    }
}