<?php

namespace dynamic3;
require_once 'AbstractTaxCalculator.php';

abstract class AbstractTaxCalculator
{
    abstract public function calculate(int $price);

    protected function addTax(int $price, float $tax): float
    {
        return round($price * (1 + $tax));
    }
}