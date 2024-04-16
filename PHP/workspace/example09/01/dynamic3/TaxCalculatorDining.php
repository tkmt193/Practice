<?php

namespace dynamic3;

require_once 'AbstractTaxCalculator.php';

class TaxCalculatorDining extends AbstractTaxCalculator
{
    private const TAX = 0.1;

    public function calculate(int $price): float
    {
        return $this->addTax($price, self::TAX);
    }
}